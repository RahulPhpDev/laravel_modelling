<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            /*
                create user_role ( user_id int(12) ,
                    FOREIGN KEY (user_id) references users(id) on delete cascade
                 )
            */
 // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

                 $table->unsignedBigInteger('role_id');
                 $table->foreign('role_id')->on('roles')->references('id')->onDelete('cascade');
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
