<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');


            $table->unsignedBigInteger('aadhar_id');
            $table->foreign('aadhar_id')->references('id')->on('aadhars')->onDelete('cascade');


            // $table->unsignedBigInteger('aadhar_id');
            // $table->foreign('aadhar_id')->references('id')->on('aadhars')->onDelete('cascade');
             // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->on('aadhars')->foreign('aadhar_id')->references('id')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
