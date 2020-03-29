<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $fillable = ['name'];
    /**
		* @return Illuminat\Database\Eloquent\hasMany
    */

		public function state()
		{
			return $this->hasMany(State::class);
		}
	/**
		* @return Illuminat\Database\Eloquent\hasManyThrough
    */
		public function city()
		{
			// ($related, $through
			return $this->hasManyThrough(City::class,State::class);
		}
}
