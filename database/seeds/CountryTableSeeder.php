<?php

use Illuminate\Database\Seeder;
use App\Country;

// use Faker\Generator as Faker;
use Faker\Factory as Faker;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker  = Faker::create();
    	foreach(range(1,10) as $index) {
    			Country::create([
    		'name' => $faker->country(),
    	]);

    	}
    	
        
    }
}
