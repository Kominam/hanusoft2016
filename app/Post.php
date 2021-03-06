<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //
    protected $table="posts";
    protected $fillable =['tittle', 'content'];
    protected $guarded =['id', 'user_id'];
    public $timestamp =true;

    public function user() {
    	return $this->belongsTo('App\User');
    }
    public function comments() {
    	return $this->hasMany('App\Comment');
    }
    public function resources() {
        return $this->hasMany('App\Resource');
    }

    public function type() {
        return $this->belongsTo('App\PostType');
    }
}
