<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $fillable =['title', 'head', 'body','pic_url'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
