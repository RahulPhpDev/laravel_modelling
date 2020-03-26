<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	 $this->command->info('Seeding: Environment - '.config('app.env'));
             $this->call(UserTableSeeder::class);
         // $this->call(ArticleTableSeeder::class);
    	 // $this->call(PostTableSeeder::class);
    }
}
