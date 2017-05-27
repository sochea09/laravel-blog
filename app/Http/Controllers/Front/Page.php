<?php

namespace App\Http\Controllers\Front;

use App\Model\Page as PageModel;
use App\Model\Post as PostModel;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;


class Page extends Controller
{
    public function index(Request $request){
        $slug = $request->route('slug');
        $pag = PageModel::where('pag_slug', $slug)->first(['pag_id']);
        $pageCats = PageModel::find($pag->pag_id)->categories()->get()->pluck('cat_id');
        $datas = "";
        $page = "";
        if(!$pageCats->isEmpty()){
            $datas = DB::table('category as cat')
                    ->join('post as pos', function($join){
                        $join->on('pos.cat_id', '=', 'cat.cat_id');
                    })
                    ->whereIn('cat.cat_id', $pageCats)
                    ->select('pos.pos_id', 'pos.pos_name', 'pos_image', 'pos_sum')
                    ->get();
        }else{
            $page = PageModel::where('pag_slug', $slug)->first(['pag_desc']);
        }
        $menus = $this->getMenu();
        return view('front.page', compact('datas','menus', 'page'));
    }

    public function getDetail(Request $request){
        $id = $request->route('id');

        $post = PostModel::where('pos_id', $id)->first();

        $menus = $this->getMenu();


        return view('front.detail', compact('post', 'menus'));
    }

}
