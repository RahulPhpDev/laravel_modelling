<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create()->each(function($user) {
            $user->articles()->save(factory(App\Article::class)->make());
        });
    	//  $users = [
     //        [
     //            'id'             => 1,
     //            'name'           => 'Admin',
     //            'email'          => 'admin@admin.com',
     //            'password'       => '$2y$10$rA.UbFkvBY0TnPXC5AvdEew7ITCs.PFo9eAfkH.m48GlOdhFMXvLG',
     //            'remember_token' => null,
     //            'created_at'     => '2019-09-15 06:09:29',
     //            'updated_at'     => '2019-09-15 06:09:29',
     //        ],
     //        [
     //            'id'             => 2,
     //            'name'           => 'User',
     //            'email'          => 'User@user.com',
     //            'password'       => '$2y$10$rA.UbFkvBY0TnPXC5AvdEew7ITCs.PFo9eAfkH.m48GlOdhFMXvLG',
     //            'remember_token' => null,
     //            'created_at'     => '2019-09-15 06:09:29',
     //            'updated_at'     => '2019-09-15 06:09:29',
     //        ]
     //    ];

     // User::insert($users);   
    }
}
