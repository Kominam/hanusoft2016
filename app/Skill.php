<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $table="skills";
    protected $fillable =['id', 'name', 'description'];
    public $timestamp =true;

    public function users() {
    	return $this->belongsToMany('App\User');
    }
    public function projects() {
    	return $this->belongsToMany('App\Project');
    }

}
