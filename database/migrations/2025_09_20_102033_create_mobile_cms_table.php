<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mobile_cms', function (Blueprint $table) {
            $table->id();

            // Text content
            $table->json('privacy_policy')->nullable();  // ['en' => '', 'ar' => '']
            $table->json('terms_conditions')->nullable();
            $table->json('about_us')->nullable();

            // Support/contact
            $table->string('support_email')->nullable();
            $table->string('support_whatsapp')->nullable();
            $table->string('support_website')->nullable();
            $table->string('support_instagram')->nullable();
            $table->string('support_facebook')->nullable();
            $table->string('support_twitter')->nullable();
            $table->string('support_threads')->nullable();
            $table->string('support_linkedin')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mobile_cms');
    }
};
