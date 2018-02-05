<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    // 指定绑定的表明
    public $table = 'data_goods';

    public $timestamps = false;

    public function list()
    {
    	return this->get();
    }
}
