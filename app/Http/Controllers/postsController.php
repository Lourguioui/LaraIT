<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postsController
{
    public function show($post){
        $user = DB::select('select * from users');
        $posts=[
            'my-first-post' => 'this is my first post',
            'my-second-post' => 'this is my second post'
        ];
        if (! array_key_exists($post,$posts)){
            abort(404,'Sorry this post does not exist');
        }
        print_r($user);
        return view('post',[
            'post' => $posts[$post]
        ]);
    }
}
