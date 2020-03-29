<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	    public $fillable = ['state_id', 'name'];
	    use \Znck\Eloquent\Traits\BelongsToThrough;


    //
    /**
		* @return Illuminate\Database\Eloquent\belongsTo
    */

	public function state()
	{
		return $this->belongsTo(State::class);
	}	

	/**
		* @return Illuminate\Database\Eloquent\BelongsToThrough
    */

	public function country()
	{
		return $this->BelongsToThrough(Country::class, State::class);
	}	
}
