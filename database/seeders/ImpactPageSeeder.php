<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImpactPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image = 'img_46.png';
        $sourcePath = public_path('assets/images/' . $image);
        $destinationFolder = 'impact-images';

        // Copy file to storage only if it doesn’t already exist
        if (File::exists($sourcePath) && !Storage::disk('public')->exists($destinationFolder . '/' . $image)) {
            Storage::disk('public')->put(
                $destinationFolder . '/' . $image,
                File::get($sourcePath)
            );
        }

        // Insert into DB with EN + AR text, same image
        DB::table('impact_pages')->insert([
            'title_en' => 'Our Impact',
            'title_ar' => 'أثرنا',
            'description_en' => 'Trust STORAT Real Estate Consultancy Co. to handle your property needs. In a world shifting
                        towards virtual work, we lead with unique choices, aligning with the trend of remote
                        professionalism. Experience the impact of innovation in real estate with us.',
            'description_ar' => 'ثق بشركة STORAT للاستشارات العقارية لتلبية احتياجاتك العقارية. في عالم يتجه نحو العمل الافتراضي،
                        نقود بخيارات فريدة تتماشى مع اتجاه الاحترافية عن بُعد. عِش تجربة تأثير الابتكار في العقارات معنا.',
            'image' => $destinationFolder . '/' . $image,
        ]);
    }
}
