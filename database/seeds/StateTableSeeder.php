<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\State;
class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,11) as $index) {
        	State::create(
        		[
        			'name' => $faker->state(),
        			'country_id' => rand(1,11),
        		]
        	);

        }
    }
}
