<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Page as PageModel;
use App\Model\Post as PostModel;
use App\Model\Category as CategoryModel;
use Redirect;

class Post extends Controller
{
    public function index(){
        $posts = PostModel::where("pos_status_cd", "ACT")->get();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        $post = new PostModel();
        $post->pos_name = $request->input('pos_name');
        $post->pos_filename = $request->input('pos_filename');
        $post->pos_sum = $request->input('pos_sum');
        $post->pos_desc = $request->input('pos_desc');
        $post->pos_status_cd = "ACT";

        if(!$post->save()){
            return "Error";
        }

        return Redirect::route('postHome');
    }

    public function edit(Request $request){
        $id = $request->route('id');

        $post = PostModel::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request){
        $id = $request->route('id');

        $post = PostModel::findOrFail($id);
        $post->pos_name = $request->input('pos_name');
        $post->pos_filename = $request->input('pos_filename');
        $post->pos_sum = $request->input('pos_sum');
        $post->pos_desc = $request->input('pos_desc');
        $post->pos_status_cd = "ACT";

        if(!$post->save()){
            return "Error";
        }

        return Redirect::route('postHome');
    }

    public function delete(Request $request){

        if($request->ajax()){
            $ids = $request->input('ids');

            $status = true;

            $status = PostModel::whereIn("pos_id", $ids)->update(["pos_status_cd" => "DEL"])?true:false;

            if($status){
                return Redirect::route('postHome');
            }else{
                return "error";
            }
        }
    }
}
