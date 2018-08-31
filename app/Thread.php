<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['subject','thread','type','user_id'];

    public function user(){
        return $this->belongsTO("App\User");
    }
    public function comments(){
        return $this->morphMany('App\Comment','commentable');
    }
}
