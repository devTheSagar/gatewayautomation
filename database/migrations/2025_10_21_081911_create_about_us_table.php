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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->longText('mission')->nullable(false);
            $table->longText('vision')->nullable(false);
            $table->json('card_icon')->nullable(false);
            $table->json('card_heading')->nullable(false);
            $table->json('card_text')->nullable(false);
            $table->longText('story')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
