<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
   // $primaryKey = 'id';
    public $timestamps = false;

    public function Professor(){
    	return $this->belongsTo('App\Professor','professor');
    }

    public function User(){
    	return $this->belongsTo('App\User','user');
    }
}
