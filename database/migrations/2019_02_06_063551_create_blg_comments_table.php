<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlgCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blg_comments', function (Blueprint $table) {
            $table->increments('commentID');
            $table->string('name',200);
            $table->string('email',100);
            $table->text('comment');
            $table->integer('blogID')->unsigned()->index();
            $table->foreign('blogID')->references('blogID')->on('blogs')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('userID')->nullable()->unsigned()->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blg_comments');
    }
}
