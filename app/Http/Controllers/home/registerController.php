<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.register');
    }

    public function doRegister(Request $request)
    {
        $arr = $request->except('_token');
        
        $row = DB::table('data_users_register')->insertGetId($arr);

        if($row > 0){
            return redirect('/login');
        }else{
            return back()->with('msg', '添加失败');
        }
    }
}
