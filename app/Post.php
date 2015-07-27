<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titleh1', 'head', 'body','pic_url', 'img_name'];

    public function user()
    {

    	return $this->belongsTo('App\User');
    }


    public function tags()
    {

    	return $this->belongsToMany('App\Tag', 'post_tag');
    }

    public function getTagListAttribute()
    {

    	return $this->tags->lists('id')->toArray();
    }


}
