<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title', 'subtitle', 'img_name'];

    public function user()
    {

    	return $this->belongsTo('App\User');
    }

}
