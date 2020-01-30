<?php

namespace App\Policies;

use App\Model\admin\admin;

use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any posts.
     *
     * @param  \App\Model\admin\admin  $user
     * @return mixed
     */
    public function viewAny(admin $user)
    {
        //
    }

    /**
     * Determine whether the admin can view the post.
     *
     * @param  \App\Model\admin\admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(admin $user)
    {
        //
    }

    /**
     * Determine whether the admin can create posts.
     *
     * @param  \App\Model\admin\admin  $admin
     * @return mixed
     */
    public function create(admin $user)
    {
        return $this->getPermission($user,5);
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Model\admin\admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(admin $user)
    {
       
        return $this->getPermission($user,7);
        
    }
       
    

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(admin $user)
    {
        //  dd($user);
        return $this->getPermission($user,8);
    }

    public function tag(admin $user)
    {
        return $this->getPermission($user,12);
    }

    public function category(admin $user)
    {
        return $this->getPermission($user,13);
    }
    
    /**
     * Determine whether the user can restore the post.
     *
     * @param  \App\Model\admin\admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function restore(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function forceDelete(admin $user)
    {
        // 
    }

    protected function getPermission($user,$p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
