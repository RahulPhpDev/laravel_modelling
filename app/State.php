<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $fillable = ['name', 'country_id'];
    //
 	 /**
		* @return Illuminat\Database\Eloquent\hasMany
    */
    public function city()
    {
    	return $this->hasMany(City::class);
    }

    /**
		* @return Illuminate\Database\Eloquent\belongsTo
    */
    public function country()
    {
    	return $this->belongsTo(Country::class);
    }
}
