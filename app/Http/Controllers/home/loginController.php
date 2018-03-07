<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('home.login');
    }

    public function dologin(Request $request)
    {
        //验证用户登录
        $res = User::userCheck($request);
        if($res){
            //将用户的信息写入session
            session(['user' => $res]);
            return redirect('/');
        }else{
            return back()->with('msg','用户名或者密码错误');
        }
    }
}
