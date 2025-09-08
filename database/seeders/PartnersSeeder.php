<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'name_en' => 'Partner One',
                'name_ar' => 'الشريك الأول',
                'image'   => 'partner1.jpg',
            ],
            [
                'name_en' => 'Partner Two',
                'name_ar' => 'الشريك الثاني',
                'image'   => 'partner2.jpg',
            ],
            [
                'name_en' => 'Partner Three',
                'name_ar' => 'الشريك الثالث',
                'image'   => 'partner3.jpg',
            ],
            [
                'name_en' => 'Partner Four',
                'name_ar' => 'الشريك الرابع',
                'image'   => 'partner4.jpg',
            ],
            [
                'name_en' => 'Partner Five',
                'name_ar' => 'الشريك الخامس',
                'image'   => 'partner1.jpg',
            ],
        ];

        $destinationFolder = 'partners';

        foreach ($partners as $partner) {
            $sourceImage = public_path('assets/images/' . $partner['image']);

            if (File::exists($sourceImage)) {
                Storage::disk('public')->put(
                    $destinationFolder . '/' . $partner['image'],
                    File::get($sourceImage)
                );
            }

            DB::table('partners')->insert([
                'name_en'       => $partner['name_en'],
                'name_ar'       => $partner['name_ar'],
                'image'      => $destinationFolder . '/' . $partner['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
