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
            $table->string('title_en')->nullable();        // e.g. STORAT
            $table->string('title_ar')->nullable();        // e.g. STORAT
            $table->string('subtitle_en')->nullable();     // e.g. Real Estate Consultancy Co.
            $table->string('subtitle_ar')->nullable();     // e.g. Real Estate Consultancy Co.
            $table->longText('content_en')->nullable();    // description paragraphs
            $table->longText('content_ar')->nullable();    // description paragraphs
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
