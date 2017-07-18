<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    function comments() {
    	return $this->hasMany('App\Comment', 'blog_id', 'id');
    }
}
