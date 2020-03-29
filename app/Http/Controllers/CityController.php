<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\City;
class CityController extends Controller
{
    public function index()
    {

    	Country::has('state')->dd();
    	/*
    	$country = Country::with('state.city')->find(1);
    	// dd($country->state);
    	$country->state->map(function($state) {
    		$state->city->map(function($city) {
    				dump($city->name);
    		});
    		
    	});

    
    	$country = Country::with('city')->find(12);
    	dd($country->city->toArray());
	*/
    	/*
    	// $country  = Country::create(['name' => 'India']);
    	$country = Country::findOrFail(12);
    	// $state = new State;
    	// $state->name = 'UK';
   		//  $state = 	$country->state()->save($state);
    	// $state = $country->state()->save(['name' => 'UK']);
    	$state = State::findOrFail(12);
   		 $city = new City;
   		 $city->name = 'Tehri Garhwal';
   		 $state->city()->save($city);
    	// dd($state);
    	// $state = State::create(['name' =>])
    	// let do this with the hasManyThrough
	*/
   		 $city = City::find(12);
   		 dd($city->country->toSql());
    }

    public function save()
    {
    	// $state = 'UP';
    	// $cities = 'Banras, Shahranpur';
    	// $cityCollect = collect(explode(',', $cities))->map(function($city) {
    	// 	return ['name' => $city];
    	// })->toArray();
    	// // dd($cityCollect);
    	// // $cityObj = new City;
    	// // $cityObj->name = $city;
    	// $state = State::firstOrCreate(['name'=> $state, 'country_id' => 1]);
    	// $state->city()->createMany($cityCollect);
    	// $city = City::latest();
    	// dd($city);

    	$countryName = 'Srilanka';
    	$stateName = 'Colambo';
    	$cityName = 'Lanka';

    	$country = Country::firstOrCreate(['name'=>$countryName]);
    	$state = $country->state()->create(['name' => $stateName])->city()->create(['name' => $cityName]);
    	// $state->city()->create(['name' => $cityName]);
    }
}
