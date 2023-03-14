<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['post_id' =>'required']);
        $like = new Like;

        $like->user_id = auth()->user()->id;
        $like->post_id = $request->input('post_id');
        $like->save();
    }

   
   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $like = Like::find($id);

        if(count(collect($like)) > 0) {
            $like->delete();
        }
    }
}
