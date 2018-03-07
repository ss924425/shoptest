<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // 指定绑定的表名
    protected $table = 'data_users_register';
    // 指定不修改添加时间和修改时间两个字段 
    public $timestamps = false;

    public static function userCheck($request)
    {
    	// 获取用户登录时填写的用户名
    	$name = $request->input('name');
    	// 通过用户的用户名去查数据库是否存在此用户
    	$user = self::where('name', $name)->first();
    	// 判断用户是否存在
    	if($user){
    		//获取用户输入的密码做验证
    		if($request->input('password') == $user->password){
    			return $user;
    		}else{
    			return null;
    		}
    	}else{
    		return null;
    	}
    }
}
