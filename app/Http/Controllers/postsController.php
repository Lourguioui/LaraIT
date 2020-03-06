<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postsController
{
    public function show($post){
        $post = \DB::table('posts')->where('postName',$post)->first();
        if (! $post){
            abort(404);
        }

       /* if (! array_key_exists($post,$posts)){
            abort(404,'Sorry this post does not exist');
        }*/

        return view('post',[
            'post' => $post
        ]);
    }
}
