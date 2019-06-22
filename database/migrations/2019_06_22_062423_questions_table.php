<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question');
            $table->string('answer1');
            $table->string('comment1');
            $table->string('answer2');
            $table->string('comment2');
            $table->string('answer3');
            $table->string('comment3');
            $table->string('answer4');
            $table->string('comment4');
            $table->string('answer5');
            $table->string('comment5');
            $table->integer('level')->unsigned();
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
        Schema::dropIfExists('questions');
    }
}
