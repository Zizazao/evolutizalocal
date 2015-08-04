<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = ['title', 'img_name', 'video_url'];

    public function user()
    {

    	return $this->belongsTo('App\User');
    }

}
