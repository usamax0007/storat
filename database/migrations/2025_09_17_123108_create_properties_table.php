<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->json('images')->nullable();
            $table->string('name');
            $table->string('title')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->unsignedInteger('beds')->default(0);
            $table->unsignedInteger('bathrooms')->default(0);
            $table->string('surface')->nullable();
            $table->boolean('terrace')->default(false);
            $table->boolean('lift')->default(false);
            $table->string('location')->nullable();
            $table->decimal('latitude')->nullable();
            $table->decimal('longitude')->nullable();
            $table->string('video')->nullable();
            $table->longText('description')->nullable();
            $table->json('floor_plans')->nullable();
            $table->string('notes')->nullable();
            $table->string('call')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
