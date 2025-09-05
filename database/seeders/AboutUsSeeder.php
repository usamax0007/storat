<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hero_sections')->insert([
            'title_en' => 'Your Dream real estate partner',
            'title_ar' => 'شريكك العقاري الحلم',
            'subtitle_en' => 'STORAT
                                 CREDEBILITY
                                 PROFICIENCY
                                 EFFIECIENCY',
            'subtitle_ar' => 'ستورات
                                 المصداقية
                                 الكفاءة
                                 الكفاءة',
            'image' => 'images/img_1.jpg',
            'button_text_en' => 'Discover more',
            'button_text_ar' => 'اكتشف المزيد',
            'button_link' => 'http://127.0.0.1:8000/services',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
