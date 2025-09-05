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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();        // e.g. STORAT
            $table->string('subtitle')->nullable();     // e.g. Real Estate Consultancy Co.
            $table->longText('content')->nullable();    // description paragraphs
            $table->string('image')->nullable();        // right side image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
