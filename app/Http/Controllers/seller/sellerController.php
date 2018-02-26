<?php

namespace App\Http\Controllers\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class sellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('data_goods')->get();
        return view('seller.admin.index',['list' => $list]);
        // return view('seller.admin.index');
    }

    
}
