<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{	
	public $table = 'data_cart';

	public $timestamps = false; 

	
    public function belongsToManyArticle()
    {

        return $this->belongsToMany('Article', 'article_tag', 'tag_id', 'article_id');

    }
    public function data_users_register()
    {

        return $this->hasOne('App\Http\Model\data_users_register','id','user_id');
    }
    public function data_cargo()
    {
        return $this->hasMany('App\Http\Model\data_cargo','id','cargo_id');

    }


}
