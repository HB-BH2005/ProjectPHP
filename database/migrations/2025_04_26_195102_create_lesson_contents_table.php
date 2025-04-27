<?php
// database/migrations/xxxx_xx_xx_create_lesson_contents_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonContentsTable extends Migration
{
    public function up()
    {
        Schema::create('lesson_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lesson_id'); // Link to the lesson
            $table->enum('content_type', ['text', 'pdf', 'video', 'audio', 'cheatsheet', 'image']); // Type of content
            $table->string('content_url')->nullable(); // URL for the content (e.g., video URL or PDF URL)
            $table->text('text_content')->nullable(); // For textual content
            $table->integer('order')->default(0); // Order of content in the lesson
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lesson_contents');
    }
}
