<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

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

    public function doLogin(Request $request)
    {
        $name = $request->input('name');
        // 通过用户的用户名去查数据库是否存在此用户
        $row = DB::table('data_users_register')->where('name', $name)->first();
        // dd($user);
        if($row){
            // 获取用户输入的密码做验证
            if($request->input('pass') == $row->password){
                // 将用户登录信息写入session
                return redirect('/');
            }else{
                return back()->with('msg', '密码错误');
            }
        }else{
            return back()->with('msg', '账号错误');
        }
    }
}
