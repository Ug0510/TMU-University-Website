<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
public function hasPermission($permission, $module)
{
    // Retrieve user's permissions for the module from the database
    // Implement your logic to check if the user has the specified permission
    // Example: check the Permissions table
}

public static function getPermissionGroups()
{
    $permission_groups = DB::table('permissions')
                         ->select('group_name')
                         ->groupBy('group_name')
                         ->get();
    return $permission_groups;
}

public static function getPermissionByGroupName($group_name)
{

    $permissions = DB::table('permissions')->select('name','id')->where('group_name',$group_name)->get();
    return $permissions;


}


public static function roleHasPermissions($role,$permissions)
{
$hasPermission = true;

foreach($permissions as $perm)
{
    if(!$role->hasPermissionTo($perm->name))
    {
        $hasPermission = false;
    }
  return $hasPermission;
}



}  

}
