<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Page as PageModel;
use Redirect;

class Page extends Controller
{
    public function index(){
        $pages = PageModel::where("pag_status_cd", "ACT")->get();
        return view('pages.index', compact('pages'));
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){

        $page = new PageModel();
        $page->pag_name = strtolower($request->input('pag_name'));
        $page->pag_filename = strtolower($request->input('pag_filename'));
        $page->pag_status_cd = "ACT";
        $page->pag_desc = $request->input('pag_desc');
        $page->pag_order = $page->orderBy('pag_order', 'desc')->pluck('pag_order')+1;

        if(!$page->save()){
            return "error";
        }

        return Redirect::route('pageHome');
    }

    public function edit(Request $request){
        $id = $request->route('id');

        $page = PageModel::findOrFail($id);

        return view('pages.edit', compact('page'));
    }

    public function update(Request $request){
        $id = $request->route('id');

        $page = PageModel::findOrFail($id);
        $page->pag_name = strtolower($request->input('pag_name'));
        $page->pag_filename = strtolower($request->input('pag_filename'));
        $page->pag_status_cd = "ACT";
        $page->pag_desc = $request->input('pag_desc');
        $page->pag_order = $request->input('pag_order');

        if(!$page->save()){
            return "error";
        }

        return Redirect::route('pageHome');
    }

    public function delete(Request $request){

        if($request->ajax()){
            $ids = $request->input('ids');

            $status = true;

            $status = PageModel::whereIn("pag_id", $ids)->update(["pag_status_cd" => "DEL"])?true:false;

            if($status){
                return Redirect::route('pageHome');
            }else{
                return "error";
            }
        }
    }
}
