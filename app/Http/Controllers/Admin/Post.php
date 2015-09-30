<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Category as PageModel;
use App\Model\Post as PostModel;
use App\Model\Category as CategoryModel;
use Redirect;
use Session;
use Intervention\Image\Facades\Image;

class Post extends Controller
{
    public function index(){
        $posts = PostModel::where("pos_status_cd", "ACT")->get();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        $cats = CategoryModel::where("cat_status_cd", "ACT")->get(["cat_id","cat_desc"]);

        return view('posts.create', compact('cats'));
    }

    public function store(Request $request){
        $user = $request->auth;

        $uniq = md5(uniqid(time(), true));

        if($request->hasFile('image')) {

            $types = array('115x69', '285x170', '617x324');
            // Width and height for thumb and resiged
            $sizes = array( array('115', '69'), array('285', '170') , array('617', '324'));
            $targetPath = 'img/media/';

            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();

            foreach($types as $key => $type){

                Image::make($image)->fit($sizes[$key][0], $sizes[$key][1])->save($targetPath.$type."/".$uniq.'.'.$ext);

            }
        }

        $post = new PostModel();
        $post->pos_name = ucfirst($request->input('pos_name'));
        $post->pos_slug = $request->input('pos_slug');
        $post->pos_image = $uniq.'.'.$ext;
        $post->pos_sum = $request->input('pos_sum');
        $post->pos_desc = $request->input('pos_desc');
        $post->pos_status_cd = "ACT";
        $post->created_by = $user->usr_id;
        $post->updated_by = $user->usr_id;
        $post->cat_id = $request->input('cat_id');

        if(!$post->save()){
            return "Error";
        }

        return Redirect::route('postHome');
    }

    public function edit(Request $request){
        $id = $request->route('id');
        $cats = CategoryModel::where("cat_status_cd", "ACT")->get(["cat_id","cat_desc"]);

        $post = PostModel::findOrFail($id);

        return view('posts.edit', compact('post', 'cats'));
    }

    public function update(Request $request){
        $user = $request->auth;
        $id = $request->route('id');

        $uniq = md5(uniqid(time(), true));

        if($request->hasFile('image')) {

            $types = array('115x69', '285x170', '617x324');
            // Width and height for thumb and resiged
            $sizes = array( array('115', '69'), array('285', '170'), array('617', '324') );
            $targetPath = 'img/media/';

            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();

            foreach($types as $key => $type){

                Image::make($image)->fit($sizes[$key][0], $sizes[$key][1])->save($targetPath.$type."/".$uniq.'.'.$ext);

            }
        }

        $post = PostModel::findOrFail($id);
        $post->pos_name = ucfirst($request->input('pos_name'));
        $post->pos_slug = $request->input('pos_slug');
        if($request->hasFile('image')) $post->pos_image = $uniq.'.'.$ext;
        $post->pos_sum = $request->input('pos_sum');
        $post->pos_desc = $request->input('pos_desc');
        $post->pos_status_cd = "ACT";
        $post->cat_id = $request->input('cat_id');
        $post->updated_by = $user->usr_id;

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
