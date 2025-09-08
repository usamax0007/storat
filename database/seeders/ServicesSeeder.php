<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title_en' => 'Retail real estate & Acquisition',
                'title_ar' => 'العقارات التجارية والاستحواذ',
                'sub_title_en' => 'We offer unique financing solutions by utilizing our own capital, resulting in a superior project structure for greater flexibility.',
                'sub_title_ar' => 'نحن نقدم حلول تمويلية فريدة من نوعها من خلال الاستفادة من رأس المال الخاص بنا، مما يؤدي إلى هيكل مشروع متفوق لتحقيق قدر أكبر من المرونة.',
                'description_en' => 'It is a long established fact that a reader will be distracted...',
                'description_ar' => 'من الحقائق الثابتة أن المحتوى المقروء...',
                'image' => 'img_1.jpg',
                'icon'  => 'img_29.jpg',
            ],
            [
                'title_en' => 'Leasing, Buying And Selling, For All Real Estate Requirements',
                'title_ar' => 'تأجير، شراء، وبيع، لجميع متطلبات العقارات',
                'sub_title_en' => 'Our dedicated team provides comprehensive services from concept to delivery.',
                'sub_title_ar' => 'يقدم فريقنا المتخصص خدمات شاملة من الفكرة حتى التسليم.',
                'description_en' => 'Our team takes care of everything...',
                'description_ar' => 'يتولى فريقنا العناية بكل شيء...',
                'image' => 'img_1.jpg',
                'icon'  => 'img_30.jpg',
            ],
            [
                'title_en' => 'Consultancy Package',
                'title_ar' => 'باقة الاستشارات',
                'sub_title_en' => 'Our experience, communication, and proactive management...',
                'sub_title_ar' => 'خبرتنا وتواصلنا وإدارتنا الاستباقية...',
                'description_en' => 'Whether you are purchasing, refinancing...',
                'description_ar' => 'سواء كنت تشتري أو تعيد تمويل...',
                'image' => 'img_1.jpg',
                'icon'  => 'img_31.jpg',
            ],
            [
                'title_en' => 'Brands Acquisitions',
                'title_ar' => 'الاستحواذ على العلامات التجارية',
                'sub_title_en' => 'We have a heritage of meeting our clients’ vision...',
                'sub_title_ar' => 'لدينا تاريخ في تلبية رؤية عملائنا...',
                'description_en' => 'Our team analyzes the market...',
                'description_ar' => 'يقوم فريقنا بتحليل السوق...',
                'image' => 'img_1.jpg',
                'icon'  => 'img_32.jpg',
            ],
            [
                'title_en' => 'Best Use Analyses',
                'title_ar' => 'تسويق العقارات',
                'sub_title_en' => 'We offer unique financing solutions...',
                'sub_title_ar' => 'نحن نقدم حلول تمويلية فريدة...',
                'description_en' => 'We leverage the latest marketing strategies...',
                'description_ar' => 'نحن نستخدم أحدث استراتيجيات...',
                'image' => 'img_1.jpg',
                'icon'  => 'img_33.jpg',
            ],
            [
                'title_en' => 'Property Valuation',
                'title_ar' => 'تقييم الممتلكات',
                'sub_title_en' => 'We have a heritage of meeting our clients’ vision...',
                'sub_title_ar' => 'لدينا تاريخ في تلبية رؤية عملائنا...',
                'description_en' => 'Our team analyzes trends...',
                'description_ar' => 'يقوم فريقنا بتحليل الاتجاهات...',
                'image' => 'img_1.jpg',
                'icon'  => 'img_34.jpg',
            ],
        ];

        $destinationFolder = 'services';

        foreach ($services as $service) {
            // Source paths (public/assets/images)
            $sourceImage = public_path('assets/images/' . $service['image']);
            $sourceIcon  = public_path('assets/images/' . $service['icon']);

            // Copy image
            if (File::exists($sourceImage)) {
                Storage::disk('public')->put(
                    $destinationFolder . '/' . $service['image'],
                    File::get($sourceImage)
                );
            }

            // Copy icon
            if (File::exists($sourceIcon)) {
                Storage::disk('public')->put(
                    $destinationFolder . '/' . $service['icon'],
                    File::get($sourceIcon)
                );
            }

            // Insert into DB with storage paths
            DB::table('services')->insert([
                'title_en'     => $service['title_en'],
                'title_ar'     => $service['title_ar'],
                'sub_title_en' => $service['sub_title_en'],
                'sub_title_ar' => $service['sub_title_ar'],
                'description_en' => $service['description_en'],
                'description_ar' => $service['description_ar'],
                'image'        => $destinationFolder . '/' . $service['image'],
                'icon'         => $destinationFolder . '/' . $service['icon'],
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}
