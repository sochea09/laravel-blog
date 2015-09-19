<?php

namespace App\Http\Controllers\Front;

use App\Model\Post;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class Home extends Controller
{
    public function index(){
        $posts = Post::where("pos_status_cd", "ACT")->get(["pos_sum"]);
        return view('home', compact('posts'));
    }

}
