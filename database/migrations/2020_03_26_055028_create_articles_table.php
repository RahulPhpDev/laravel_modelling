<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('content');

            // $table->unsignedBigInteger('admin_id');
            // $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');


            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // create table articles (id int (12) not null AUTO_INCREMENT, 
            //     title text(), 
            //     content text(),
            //      user_id int(12),
            //      FOREIGN KEY (user_id) references users(id) on delete cascade
            //  )

            $table->timestamps();
            $table->date('closed_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
