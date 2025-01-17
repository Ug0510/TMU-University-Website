<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\BlogsCategory;
use Illuminate\Validation\ValidationException;
use App\Exports\PermissionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PermissionImport;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Post;
use App\Models\Blogs;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class BlogsController extends Controller
{

    public function blog_info($slug, Request $request)
    {
        try {
            // Fetch the blog post from the 'post' table using the slug
            $blog = Blogs::where('n_slug', $slug)->where('status', 1)->firstOrFail();
            
            $category_id = $blog->category_id;

            // Fetch comments related to the blog post using a join
            $allComments = DB::table('post_comments')
                ->where('status', 1)
                ->where('post_id', $blog->id)
                ->orderBy('created_at', 'ASC')
                ->get()
                ->map(function ($comment) {
                    $comment->created_at = Carbon::parse($comment->created_at);
                    return $comment;
                });

            // Calculate the number of top-level comments
            $topLevelCommentsCount = $allComments->whereNull('parent_id')->count();

            // Organize comments into a hierarchical structure
            $comments = $this->organizeComments($allComments);

            $blog_categories = BlogsCategory::where('category_status','Y')->get();

            // Fetch top 5 recent posts
            $recentPosts = Blogs::where('status', 1)
                ->orderBy('posted_at', 'DESC')
                ->limit(3)
                ->get()
                ->map(function ($post) {
                    $post->posted_at = Carbon::parse($post->posted_at);
                    return $post;
                });

            $popularPosts = Blogs::where('status', 1)
                ->orderBy('popular_priority', 'DESC')
                ->orderBy('posted_at', 'DESC')
                ->limit(5)
                ->get()
                ->map(function ($post) {
                    $post->posted_at = Carbon::parse($post->posted_at);
                    return $post;
                });

            $relatedPosts = Blogs::where('status', 1)
                ->where('category_id',$category_id)
                ->orderBy('posted_at', 'DESC')
                ->limit(5)
                ->get()
                ->map(function ($post) {
                    $post->posted_at = Carbon::parse($post->posted_at);
                    return $post;
                });

            $previousPost = Blogs::where('status', 1)
                ->where('id', '<', $blog->id)
                ->orderBy('id', 'DESC')
                ->first();

            // Fetch the next post (post with the next higher id)
            $nextPost = Blogs::where('status', 1)
                ->where('id', '>', $blog->id)
                ->orderBy('id', 'ASC')
                ->first();

            $categoryName = $blog->category_name ? $blog->category_name->category_name : 'No category';

            // Pass both the blog post and the comments to the view
            return view('university.blogs.blog_info', compact('categoryName','previousPost', 'nextPost', 'blog', 'comments', 'topLevelCommentsCount', 'blog_categories', 'recentPosts', 'popularPosts', 'relatedPosts'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Redirect to the 'tmu.home' route if the blog is not found
            return redirect()->route('tmuhome');
        }
    }


    private function organizeComments($comments)
    {
        $grouped = [];

        // Group comments by parent_id
        foreach ($comments as $comment) {
            $grouped[$comment->parent_id][] = $comment;
        }

        // Function to build top-level comments and their direct replies
        $buildTree = function ($parentId) use (&$grouped) {
            $result = [];

            if (isset($grouped[$parentId])) {
                foreach ($grouped[$parentId] as $comment) {
                    // Get direct replies to the current comment
                    $comment->children = isset($grouped[$comment->id]) ? $grouped[$comment->id] : [];

                    // Only include the comment in the result
                    $result[] = $comment;
                }
            }

            return $result;
        };

        // Get top-level comments and their direct replies
        return $buildTree(null); // Start with null to get top-level comments
    }

    public function submitComment(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'template-contactform-name' => 'required|string|max:255',
            'template-contactform-email' => 'required|email',
            'template-contactform-phone' => 'nullable|string|max:20', // Adjust the max length if needed
            'template-contactform-message' => 'required|string',
        ]);

        // Store the comment directly in the database
        DB::table('post_comments')->insert([
            'post_id' => $id, // The ID of the blog being displayed
            'parent_id' => null, // Change this if it's a reply to a comment
            'name' => $request->input('template-contactform-name'),
            'email' => $request->input('template-contactform-email'),
            'phone_no' => $request->input('template-contactform-phone'),
            'comment_content' => $request->input('template-contactform-message'),
            'status' => 0, // Set status to 0
            'created_at' => now(), // Current timestamp
            'updated_at' => now(), // Current timestamp
        ]);

        // Redirect back with a success message
        return response()->json(['success' => true, 'message' => 'Comment sent successfully!']);
    }
public function all_blogs(Request $request)
{
    // Fetch all active blogs (status = 1) with associated categories and sort by 'posted_at' and 'id' in descending order
    $activeBlogs = Blogs::with('category_name')
        ->where('status', 1)
        ->orderBy('posted_at', 'DESC')
        ->orderBy('id', 'DESC')
        ->get();

    // Group blogs by their category name
    $groupedBlogs = $activeBlogs->groupBy(function($blog) {
        return $blog->category_name->category_name ?? 'Uncategorized';
    });

    // Return the view with both the grouped blogs and all active blogs
    return view('university.blogs.blognew', [
        'groupedBlogs' => $groupedBlogs,  // Blogs separated by category name
        'allBlogs' => $activeBlogs,       // All active blogs from all categories
    ]);
}

    public function blogs_active()
    {
        $allBlogs = Blogs::where('status', 1)
            ->orderBy('posted_at', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return view('university.blogs.all', compact('allBlogs'));
    }
    public function blogs_Category($category)
    {
        
        $category_slug = 'blog/category/'.$category;
        
        
    $blog_category = BlogsCategory::where('category_slug',$category_slug)
    ->where('category_status', 'Y')
    ->firstOrFail();
    
    $blog_category_id = $blog_category->category_id;
    $category = $blog_category->category_name;


        $categoryBlogs = Blogs::where('category_id', $blog_category_id)
            ->where('status', 1)
            ->orderBy('posted_at', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return view('university.blogs.category', compact('categoryBlogs', 'category'));
    }
}
