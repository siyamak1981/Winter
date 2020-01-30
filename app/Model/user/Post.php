<?php
namespace App\Model\user;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags(){
        return $this->belongsToMany('App\Model\user\tag','tag_posts')->withTimestamps();
    }
    public function categories(){
        return $this->belongsToMany('App\Model\user\category', 'category_posts')->withTimestamps();
    }
    public function getRouteKeyName()
    {
        return 'slug';
       
    }
}

