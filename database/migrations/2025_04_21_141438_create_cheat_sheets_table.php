<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cheat_sheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_id')->constrained('levels')->onDelete('cascade'); 
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->string('nom');         
            $table->text('content');       
            $table->timestamps();         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cheat_sheets');
    }
};
