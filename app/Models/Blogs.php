<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'post_updated';

    protected $fillable = ['id','post_title','post_description','full_post','post_image','post_path','post_full_path','category','category_old','post_thumb','post_thumb_path','post_thumb_full_path','post_month','post_month_name','post_year','display_main','status','n_slug','popular_url','popular_priority','meta_title','meta_description','alt_tag','posted_at','priority','monaco_image_path','monaco_image_alt_tag','thumbnail_alt_tag','alt_tag_main_image'];
    
  public function category_name()
{
    return $this->belongsTo(BlogsCategory::class, 'category_id', 'category_id');
}

}
