<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Goods;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = Goods::where('category_id',33)->get();
        // dd($res);
        // $res = Goods::list();
        return view('home.product',['res'=>$res]);
        
    }

}
