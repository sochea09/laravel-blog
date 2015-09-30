<?php

namespace App\Http\Controllers\Front;

use App\Model\Post;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class Home extends Controller
{
    public function index(){
        $posts = Post::where("pos_status_cd", "ACT")->get(["pos_id","pos_name","pos_image","pos_sum"]);
        $menus = $this->getMenu();
        return view('home', compact('posts', 'menus'));
    }

}
