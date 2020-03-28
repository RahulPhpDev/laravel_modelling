<?php

use Illuminate\Database\Seeder;

class AadharTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Aadhar::class, 2)->create();
    }
}
