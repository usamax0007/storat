<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Source image (inside /public/assets/images)
        $sourcePath = public_path('assets/images/img_35.png');

        // Destination folder inside storage/app/public
        $destinationFolder = 'vision';
        $filename = 'img_35.png';

        // Copy file if it exists
        if (File::exists($sourcePath)) {
            Storage::disk('public')->put(
                $destinationFolder . '/' . $filename,
                File::get($sourcePath)
            );
        }

        // Insert into DB (store relative path inside storage/app/public)
        DB::table('visions')->insert([
            'title_en' => 'Our Vision',
            'title_ar' => 'رؤيتنا',
            'description_en' => '
            Forecast and trends are uniform and projecting exponential growth in companies and individual choosing to work more virtually yet professionally, they call it the work life balance, and STORAT Real Estate Consultancy Co.leading the Real Estate Consultancy with economic shift by choices available nowhere else.

            STORAT Real Estate Consultancy Co. is a professional Real Estate office provides you the best services but it’s all Fraction on the tradition cost, all the services are customized to the client by the client, and according to their budget, there is no one size fits all.
            ',
            'description_ar' => '
            التوقعات والاتجاهات تشير إلى نمو متسارع وموحّد في الشركات والأفراد الذين يختارون العمل بشكل أكثر افتراضية مع الاحتفاظ بالاحترافية، ويطلقون على ذلك توازن الحياة العملية. تقود شركة ستورات للاستشارات العقارية هذا التحول الاقتصادي من خلال توفير خيارات غير متاحة في أي مكان آخر.

            شركة ستورات للاستشارات العقارية هي مكتب عقاري مهني يقدم لكم أفضل الخدمات ولكن بتكلفة أقل بكثير من التكاليف التقليدية. جميع الخدمات مصممة خصيصاً للعميل وبواسطة العميل ووفقاً لميزانيته، فلا يوجد حل واحد يناسب الجميع.
            ',

            'image' => $destinationFolder . '/' . $filename,
        ]);
    }
}
