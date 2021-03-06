<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	
	protected $fillable = [
		'id', 'name', 'slug'
	];

    public function posts(){
    	return $this->belongsToMany('App\Model\user\Post', 'category_posts');
    }

   public function getRouteKeyName(){
    	return 'slug';
    }
}
