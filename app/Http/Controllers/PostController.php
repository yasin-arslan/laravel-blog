<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;



class PostController extends Controller
{
    public function index(){

        return view('posts.index', [
                'posts' => Post::with('User')->latest()->filter(request(['search','category','author']))->paginate(3)->withQueryString(),
                ]
        );
    }
    public function showPost($slug){
        $post = Post::where('slug',$slug)->first();
        return !$post ? abort(404) : view('posts.show', compact('post'));
    }
    public function showAuthor($author){
        $user = User::where('name',$author)->first();
        $posts = Post::where('user_id',$user->id)->get();
        return !$posts ? abort(404) : view('posts.index', compact('posts'));
    }



}
