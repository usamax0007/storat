<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            'img_10.png',
            'img_11.png',
            'img_12.png',
            'img_13.png',
            'img_14.png',
            'img_15.png',
            'img_16.png',
            'img_17.png',
        ];

        foreach ($images as $image) {
            $sourcePath = public_path('assets/images/' . $image);
            $destinationFolder = 'projects';

            // Copy file to storage if exists
            if (File::exists($sourcePath)) {
                Storage::disk('public')->put(
                    $destinationFolder . '/' . $image,
                    File::get($sourcePath)
                );
            }

            // Insert into DB with relative path
            DB::table('projects')->insert([
                'name_en' => 'Project 1',
                'name_ar' => 'المشروع 1',
                'image'   => $destinationFolder . '/' . $image,
            ]);
        }
    }
}
