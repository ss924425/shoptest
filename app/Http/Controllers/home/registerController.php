<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use DB;
use session;

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

    public function send(Request $request)
    {
        // $tel = $request->input('tel');
        // $config = [
        //     'accessKeyId'    => 'LTAILN0uJbGAAy46',
        //     'accessKeySecret' => 'UsRTBFHMIoOHptoTLyFDGG8YC7U936',
        // ];
        // $code = rand(100000, 999999);
        // $client  = new Client($config);
        // $sendSms = new SendSms;
        // $sendSms->setPhoneNumbers($tel);
        // $sendSms->setSignName('爱客shop');
        // $sendSms->setTemplateCode('SMS_125029950');
        // $sendSms->setTemplateParam(['code' => $code]);
        // $sendSms->setOutId('demo');

        // print_r($client->execute($sendSms));
        // session(['code'=>$code]);
    }

    public function doRegister(Request $request)
    {
        // $code = $request->input('code');
        // if($code != session('code')){
        //     return back()->with('msg', '验证码错误');
        // }

        
        $arr = $request->except('_token');
        // dd($arr);
        // $messages = [
        //     'required' => ':attribute 是必须填写的',
        //     'max'      => ':attribute 必须小于12个字符',
        //     'min'      => ':attribute 必须大于8个字符'
        // ];


        // $this->validate($request, [
        //     'name' => 'required|max:12|min:3',
        //     'password' => 'required',
        // ], $messages);


        if($arr['password'] != $arr['repass']){
            return back()->with('msg','两次密码不一致');
        }


        unset($arr['repass']);
        unset($arr['code']);
        // dd($arr);
        $res = DB::table('data_users_register')->insertGetId($arr);


        if($res){
            return redirect('/login')->with('msg','注册成功');
        }else{
            return back()->with('msg','注册失败');
        } 
    }
}
