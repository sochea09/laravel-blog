<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Media as MediaModel;
use Intervention\Image\Facades\Image;
use Session;
use Redirect;

class Media extends Controller
{
    public function index(){
        $medias = MediaModel::where('med_status_cd', 'ACT')->latest('updated_at')->get();
        return view('medias.index', compact('medias'));
    }

    public function create(){
        $data['image'] = Session::get('img');
        $data['modal'] = (Session::get('modal') == null ? 'false' : 'true');
        return view('medias.create', compact('data'));
    }

    public function store(Request $request){

        $uniq = md5(uniqid(time(), true));

        if(!$request->file('image')){
            return Redirect::back();
        }

        if($request->hasFile('image')) {

            $image = $request->file('image');

            $ext = $image->getClientOriginalExtension();

            $name_image = $image->getClientOriginalName();

            $image->move('img/temp/', $uniq.'.'.$ext);

            $image_final = 'img/temp/' . $uniq.'.'.$ext;

            $int_image = Image::make($image_final);

            $int_image->resize(568, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $int_image->save($image_final);

            Session::put('modal', 'true');
        }else{
            $image_final = $request->get('img_bckp');
        }

        Session::put('img', $image_final);
        Session::put('img_name', $name_image);
        Session::put('img_hash_name', $uniq.".".$ext);

        return Redirect::back();
    }

    public function crop(Request $request){

        Session::forget('modal');

        $img = Session::get('img');
        $img_real_name = Session::get('img_name');
        $img_hash_name = Session::get('img_hash_name');

        $int_img = Image::make($img);

        $int_img->crop(intval($request->get('w')), intval($request->get('h')), intval($request->get('x')), intval($request->get('y')));

        $int_img->fit(330);

        $int_img->save($img);

        $con = file_get_contents($img);
        file_put_contents('img/media/'.$img_hash_name, $con);

        unlink($img);

        Session::put('img','img/media/'.$img_hash_name);

        $media = new MediaModel();
        $media->med_name = $img_hash_name;
        $media->med_title = $request->med_title;
        $media->med_desc = $request->med_desc;
        $media->med_link = '/img/media/'.$img_hash_name;

        if(!$media->save()){
            return 'Error';
        }

        return Redirect::route('createImage');
    }

    public function delete(Request $request){

        if($request->ajax()){
            $ids = $request->input('ids');

            $status = true;

            $status = MediaModel::whereIn("med_id", $ids)->update(["med_status_cd" => "DEL"])?true:false;

            if($status){
                return Redirect('admin/media');
            }else{
                return "error";
            }
        }
    }


}
