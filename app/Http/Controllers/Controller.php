<?php

namespace App\Http\Controllers;

use App\Model\Page;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //debuging
    function debug($var){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }

    public function getMenu(){
        return Page::where("pag_status_cd", "ACT")->orderBy('pag_order', 'asc')->get(['pag_name','pag_slug']);
    }

}
