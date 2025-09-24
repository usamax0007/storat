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
        Schema::table('properties', function (Blueprint $table) {
            $table->string('total_price')->nullable();
            $table->string('advertisement_price')->nullable();
            $table->string('advertisement_no_of_days')->nullable();
            $table->string('top_advertisement_price')->nullable();
            $table->string('top_advertisement_no_of_days')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('total_price');
            $table->dropColumn('advertisement_price');
            $table->dropColumn('advertisement_no_of_days');
            $table->dropColumn('top_advertisement_price');
            $table->dropColumn('top_advertisement_no_of_days');
        });
    }
};
