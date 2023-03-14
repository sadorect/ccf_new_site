<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Http\Resources\AllPostsCollection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        return Inertia::render('User', [
            'posts' => new AllPostsCollection($posts)
        ]);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $posts = Post::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return Inertia::render('User', [
            'user' => User::find($id),
            'posts' => new AllPostsCollection($posts)
        ]);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateImage(Request $request)
    {
        $request->validate([ 'image' => 'required|mimes:jpg,jpeg,png']);
        $user = (new ImageService)->updateImage(auth()->user(), $request);
        $user->save();
    }

    public function updateHeaderImage(Request $request)
    {
        $request->validate([ 'headerImage' => 'required|mimes:jpg,jpeg,png']);
        $user = (new ImageService)->updateImage(auth()->user(), $request);
        $user->save();
    }

}
