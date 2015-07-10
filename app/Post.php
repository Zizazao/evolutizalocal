<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['meta_tags', 'titulo', 'head', 'body','pic_url', 'tags'];

    public function user()
    {

    	return this->belongsTo('App\User');
    }

//	DO IT LAZY DOG!

/*
    public function tags()
    {


    }

    */
}
