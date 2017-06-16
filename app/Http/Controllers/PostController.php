<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Image;
use Auth;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->get();

        $latest = Post::orderBy('id', 'desc')->take(3)->get();

        /*return dd($latest);*/
        return view('index', compact('posts', 'latest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        if(is_numeric($slug))
        {
            $post = Post::findOrFail($slug);

            return redirect()->action('PostController@show', ['slug' => $article->slug]);
        }

        $post = Post::with('image_posts.image', 'post_tags.tag', 'user.image', 'category', 'comments.user.image', 'comments.replies.user')->where('slug', $slug)->first();

        $similar = Post::orderBy('id', 'desc')->with('category')->where('category_id', '=', $post->category->id)->where('id', '!=', $post->id)->take(3)->get();

        if(empty($post->user->image_id) && empty($post->user->image))
        {
            $post->user->image_id = 5;
            $post->user->image = Image::findOrFail($post->user->image_id);
        }

        if(Auth::user())
        {
            $user = User::with('image')->find(Auth::id());
        }
        else { $unknown = Image::find(1); }

        return view('post', compact('post', 'similar', 'user', 'unknown'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
