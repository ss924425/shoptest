<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    // 指定绑定的表明
    public $table = 'data_cargo';

    public $timestamps = false;

    public function data_category()
    {
    	return $this->hasOne('App\Http\Model\data_category','id','category_id');
    }
}
