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
        Schema::create('quiz_result', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quiz_id')->nullable(false);
            $table->text('question')->nullable(false);
            $table->text('user_answer')->nullable(false);
            $table->text('correct_answer')->nullable(false);
            $table->boolean('is_correct')->nullable(false);
            $table->timestamps();

            $table->foreign('quiz_id')->references('id')->on('quizz')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_result');
    }
};
