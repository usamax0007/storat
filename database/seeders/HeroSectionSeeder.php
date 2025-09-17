<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sourceImage = public_path('assets/images/img_38.png');
        $sourceRent  = public_path('assets/images/img_25.png');
        $sourceProp  = public_path('assets/images/img_26.png');

        // Destination folder
        $destinationFolder = 'hero-sections';

        // Filenames
        $imageFile = 'img_38.png';
        $rentFile  = 'img_25.png';
        $propFile  = 'img_26.png';

        // Copy image if exists
        if (File::exists($sourceImage)) {
            Storage::disk('public')->put(
                $destinationFolder . '/' . $imageFile,
                File::get($sourceImage)
            );
        }

        if (File::exists($sourceRent)) {
            Storage::disk('public')->put(
                $destinationFolder . '/' . $rentFile,
                File::get($sourceRent)
            );
        }

        if (File::exists($sourceProp)) {
            Storage::disk('public')->put(
                $destinationFolder . '/' . $propFile,
                File::get($sourceProp)
            );
        }


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
            'button_text_en' => 'Discover more',
            'button_text_ar' => 'اكتشف المزيد',
            'button_link' => 'http://127.0.0.1:8000/services',
            'rent_heading_en' => '50k+ renters',
            'rent_sub_heading_en' => 'believe in our service',
            'rent_heading_ar' => '50 ألف+ مستأجر',
            'rent_sub_heading_ar' => 'يثقون في خدمتنا',
            'properties_heading_en' => '10k+ properties',
            'properties_sub_heading_en' => 'and house ready for occupancy',
            'image'           => $destinationFolder . '/' . $imageFile,
            'rent_icon'       => $destinationFolder . '/' . $rentFile,
            'properties_icon' => $destinationFolder . '/' . $propFile,
            'properties_heading_ar' => '10 آلاف+ عقار',
            'properties_sub_heading_ar' => 'ومنازل جاهزة للسكن',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
