<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function post(post $post)
    {
        return view('user.detail-blog', compact('post'));
    }
    public function getAllPosts()
    {
    	return $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
    }
}