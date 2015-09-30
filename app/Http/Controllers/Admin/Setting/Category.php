<?php

namespace App\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use App\Model\Category as CategoryModel;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class Category extends Controller
{

    public function index()
    {
        $cats = CategoryModel::where('cat_status_cd', 'ACT')->get();
        return view('settings.categories.index', compact('cats'));
    }

    public function create(){
        return view('settings.categories.create');
    }

    public function store(Request $request){

        $cat = new CategoryModel();
        $cat->cat_name = ucfirst($request->input('cat_name'));
        $cat->cat_desc = ucfirst($request->input('cat_desc'));
        $cat->cat_status_cd = 'ACT';

        if(!$cat->save()){
            return 'Error';
        }

        return Redirect::route('catHome');
    }

    public function edit(Request $request){
        $id = $request->route('id');
        $cat = CategoryModel::findOrFail($id);

        return view('settings.categories.edit', compact('cat'));
    }

    public function update(Request $request){
        $id = $request->route('id');

        $cat = CategoryModel::findOrFail($id);
        $cat->cat_name = ucfirst($request->input('cat_name'));
        $cat->cat_desc = ucfirst($request->input('cat_desc'));

        if(!$cat->save()){
            return 'Error';
        }

        return Redirect::route('catHome');
    }

    public function delete(Request $request){

        if($request->ajax()){
            $ids = $request->input('ids');
            
            $status = true;

            $status = CategoryModel::whereIn("cat_id", $ids)->update(["cat_status_cd" => "DEL"])?true:false;

            if($status){
                return Redirect::route('catHome');
            }else{
                return "error";
            }
        }
    }


}
