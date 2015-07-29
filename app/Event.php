<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable =['title', 'head', 'body','pic_url', 'launch_date', 'img_name'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
