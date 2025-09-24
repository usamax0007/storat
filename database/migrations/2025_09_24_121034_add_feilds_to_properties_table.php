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
            $table->boolean('top_list');
            $table->boolean('wifi');
            $table->boolean('pool');
            $table->boolean('furnished');
            $table->boolean('parking');
            $table->boolean('fitness');
            $table->boolean('sea_view');
            $table->boolean('maid_room');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('top_list');
            $table->dropColumn('wifi');
            $table->dropColumn('pool');
            $table->dropColumn('furnished');
            $table->dropColumn('parking');
            $table->dropColumn('fitness');
            $table->dropColumn('sea_view');
            $table->dropColumn('maid_room');
        });
    }
};
