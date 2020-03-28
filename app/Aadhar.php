<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aadhar extends Model
{
    //

    /*
		 /**
   		  * @return \Illuminate\Database\Eloquent\Relations\hasManyy

    */

		 public function user() {
		 	return $this->hasMany(User::class);
		 }
}
