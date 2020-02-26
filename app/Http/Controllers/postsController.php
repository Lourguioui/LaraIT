<?php


namespace App\Http\Controllers;


class postsController
{
    public function show($post){
        $posts=[
            'my-first-post' => 'this is my first post',
            'my-second-post' => 'this is my second post'
        ];
        if (! array_key_exists($post,$posts)){
            abort(404,'Sorry this post does not exist');
        }
        return view('post',[
            'post' => $posts[$post]
        ]);
    }
}
