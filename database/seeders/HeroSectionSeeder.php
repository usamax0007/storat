<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hero_sections')->insert([
            'title_en' => 'Your Dream real estate partner',
            'title_ar' => 'شريكك العقاري الحلم',
            'description_en' => 'STORAT
                                 CREDEBILITY
                                 PROFICIENCY
                                 EFFIECIENCY',
            'description_ar' => 'ستورات
                                 المصداقية
                                 الكفاءة
                                 الكفاءة',
            'image' => 'images/img_24.png',
            'button_text_en' => 'Discover more',
            'button_text_ar' => 'اكتشف المزيد',
            'button_link' => 'http://127.0.0.1:8000/services',
            'rent_heading_en' => '50k+ renters',
            'rent_sub_heading_en' => 'believe in our service',
            'rent_icon' => 'images/img_25.png',
            'rent_heading_ar' => '50 ألف+ مستأجر',
            'rent_sub_heading_ar' => 'يثقون في خدمتنا',
            'properties_heading_en' => '10k+ properties',
            'properties_sub_heading_en' => 'and house ready for occupancy',
            'properties_icon' => 'images/img_26.png',
            'properties_heading_ar' => '10 آلاف+ عقار',
            'properties_sub_heading_ar' => 'ومنازل جاهزة للسكن',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
