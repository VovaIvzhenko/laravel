<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index(Post $postModel){//инъекция зависимостей (Post $postModel)
//        $posts = Post::all();
//        $posts = Post::latest('id')->get();//sorting id | published_at
//        $posts = Post::latest('id')
//                       ->where('published_at','<=', Carbon::now())
//                       ->get();

        $posts = $postModel->getPublishedPosts();
        return view('post.index', ['posts' => $posts]);
    }

    public function unPublished(Post $postModel){
        $posts = $postModel->getUnPublishedPosts();
        return view('post.index', ['posts' => $posts]);
    }

}
