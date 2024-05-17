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
        Schema::create('word', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id')->nullable(false);
            $table->string('word',100)->nullable(false);
            $table->string('translation',100)->nullable(false);
            $table->timestamps();

            $table->foreign('language_id')->references('id')->on('language');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('word');
    }
};
