<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title_en' => 'Retail real estate & Acquisition',
            'title_ar' => 'العقارات التجارية والاستحواذ',
            'sub_title_en' => 'We offer unique financing solutions by utilizing our own capital, resulting in a superior project structure for greater flexibility.',
            'sub_title_ar' => 'نحن نقدم حلول تمويلية فريدة من نوعها من خلال الاستفادة من رأس المال الخاص بنا، مما يؤدي إلى هيكل مشروع متفوق لتحقيق قدر أكبر من المرونة.',
            'description_en' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'description_ar' => 'من الحقائق الثابتة أن المحتوى المقروء لصفحة ما سيشتت انتباه القارئ عند النظر إلى شكل توضع الفقرات. يكمن الهدف من استخدام لوريم إيبسوم في توزيعه الطبيعي للأحرف، على عكس استخدام "هنا المحتوى"، "هنا المحتوى"، مما يجعله يبدو كنص مقروء. تستخدم العديد من برامج النشر المكتبي ومحررات صفحات الويب الآن لوريم إيبسوم كنموذج افتراضي للنص، وسيظهر البحث عن لوريم إيبسوم العديد من المواقع الإلكترونية التي لا تزال في بداياتها. تطورت نسخ مختلفة من لوريم إيبسوم على مر السنين، أحيانًا عن طريق الصدفة، وأحيانًا عن قصد (بإدخال بعض الفكاهة وما شابه).',
            'image' => 'images/img_1.jpg',
            'icon' => 'images/img_2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
