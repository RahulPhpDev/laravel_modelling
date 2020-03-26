<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

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
}
