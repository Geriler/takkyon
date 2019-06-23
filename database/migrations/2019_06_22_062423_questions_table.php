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
            $table->text('comment1');
            $table->string('answer2');
            $table->text('comment2');
            $table->string('answer3');
            $table->text('comment3');
            $table->string('answer4')->nullable();
            $table->text('comment4')->nullable();
            $table->string('answer5')->nullable();
            $table->text('comment5')->nullable();
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
