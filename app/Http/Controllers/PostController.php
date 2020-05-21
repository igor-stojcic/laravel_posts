<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = Post::all();
        return view("posts",
        [
            "allPosts"=>$allPosts
        ]);
    }

    public function show($id)
    {
        // $post = Post::where("id",$id)->first();
        $post = Post::find($id);
        return view("post",
        [
            'post'=>$post
        ]);
    }

    public static function convert($data)
    {
        return Carbon::parse($data)->format('m/d/y');
    }

    public function create()
    {
        return view("create_post");
    }

    public function store()
    {
        $pureData = request()->validate([
            "title"=>'required',
            "body"=>'required',
            "author"=>'required'
        ]);

        
        $post = new Post();
        // $post->title = request("title");
        // $post->author = request("name");
        // $post->body = request("body");
        $post->create($pureData);
        // $post->save();

        return redirect(route('home'))->with('create','Post CREATED');
    }

    public function edit(Post $post)
    {
        // $post = Post::find($id);
        return view("edit_post",compact('post'));
    }

    public function update(Post $post)
    {
        // $post = Post::find($id);

        // $post->title = request("title");
        // $post->author = request("name");
        // $post->body = request("body");
        $post->update(request()->validate([
            "title"=>'required',
            "body"=>'required',
            "author"=>'required'
        ]));

        return redirect('/post/'.$post->id)->with('updated','Post UPDATED');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/')->with("delete","Post DELETE");
    }
}
