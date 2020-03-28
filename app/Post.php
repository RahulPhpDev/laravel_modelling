<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Tag;
class Post extends Model
{
	protected $fillable = ['title', 'content']; 
	public $perPage = 5;
	protected $dateFormat = 'Y-m-d';

	public function getCreatedAtAttribute($date) 
	{
		return  $date  ? Carbon::parse($date)->format($this->dateFormat) : null;
	}

	/*
		*
		* Accessor
		*
	*/

	public function getTitleContentAttribute() 
	{
		return $this->title. ' '.$this->content;
	}	

 
	/**
	* Polymorphic one to many
		* @return \Illuminate\Database\Eloquent\Relations\MorphToMany
		*
	*/

	public function comments()
	{
		return $this->morphMany(Comment::class, 'commentable');
	}

	 /**
    	* @return  \Illuminate\Database\Eloquent\Relations\MorphToMany
    */

    public function tags()
    {
         return $this->morphToMany(Tag::class, 'taggable');
    }	
}
