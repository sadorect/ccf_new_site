<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class LikesCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($post) {
            return [
                'id'=>$post->id,
                'text' => $post->text,
                'image'=>$post->image,
                'created_at' => $post->created_at->format('M D Y'),
                'comments' =>$posts->comments->map(function ($comment) {
                    return [
                        'id' => $comment->id,
                        'text' => $comment->text,
                        'user' => [
                            'id' => $comment->id,
                            'name' => $comment->name,
                             'image' => $comment->image,
                        ],
                    ];
                }),
                'likes' => $post->likes->map(function ($like) {
                    return [
                        'id' => $like->id,
                        'user_id' => $like->user_id,
                        'post_id' => $like->post_id,
                    ];
                }),
                'user' =>[
                    'id' => $post->user->id,
                        'name' => $post->user->name,
                        'image' => $post->user->image,
                ]
            ];
        });
    }
}
