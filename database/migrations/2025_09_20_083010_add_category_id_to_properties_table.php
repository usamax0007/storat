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
            $table->unsignedBigInteger('category_id')->nullable()->after('id');
            $table->unsignedBigInteger('property_plan_id')->nullable()->after('category_id');
            $table->string('purpose_type')->nullable()->after('title');
            $table->string('rooms')->nullable()->after('purpose_type');
            $table->string('floor')->nullable()->after('rooms');
            $table->unsignedBigInteger('user_id')->nullable()->after('property_plan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('category_id');
            $table->dropColumn('property_plan_id');
            $table->dropColumn('purpose_type');
            $table->dropColumn('rooms');
            $table->dropColumn('floor');
            $table->dropColumn('user_id');
        });
    }
};
