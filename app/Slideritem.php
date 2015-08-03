<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slideritem extends Model
{
    protected $fillable = ['title', 'subtitle', 'img_name'];


    public function user()
    {

    	return $this->belongsTo('App\User');
    }
}
