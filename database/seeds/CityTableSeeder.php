<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\City;
class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
	    	for($i = 0 ;$i <9; $i++) {
    			  City::create([
		        	'name' => $faker->city(),
		        	'state_id' => rand(1,10),
		        ]);
    	}
      
    }
}
