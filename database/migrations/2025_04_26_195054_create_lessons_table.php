<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable(); // Short description of lesson
            $table->unsignedBigInteger('subject_id'); // Link to Subject
            $table->unsignedBigInteger('level_id');   // Link to Level
            $table->integer('order')->default(0);     // Order in subject
            $table->timestamps();

            // Foreign Keys
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
