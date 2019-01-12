<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'user_id','title','description','article','category','image','viewer'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
