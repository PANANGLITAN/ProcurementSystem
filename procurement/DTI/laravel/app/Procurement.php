<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
	public $timestamps = false;
    public function posts()
    {
    	return $this->hasMany('App\Post');
    }
}
