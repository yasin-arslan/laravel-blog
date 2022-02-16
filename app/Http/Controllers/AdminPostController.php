<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index(){
        return view('components.admin.posts.index',[
            'posts'=>Post::paginate(50)
        ]);
    }
    public function create(){
        return view('components.admin.posts.create');
    }
    public function store(Request $request){
        $attributes = $request->validate([
            'title'=>'required',
            'thumbnail'=>'required|image',
            'slug'=>['required',Rule::unique('posts','slug')],
            'excerpt'=>'required',
            'body'=>'required',
            'category_id'=>['required',Rule::exists('categories','id')]
        ]);
        $attributes['user_id'] = Auth::id();
        $attributes['thumbnail'] = $request->file('thumbnail')->store('public/thumbnails');
        $attributes['thumbnail'] = explode('/',$attributes['thumbnail'])[2];
        Post::create($attributes);
        return redirect('/');
    }
    public function edit(Post $post){
        return view('components.admin.posts.edit',['post'=>$post]);
    }
    public function postedit(Post $post,Request $request){
        ddd($request->all());
    }
}
