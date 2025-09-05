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
            [
                'title_en' => 'Retail real estate & Acquisition',
                'title_ar' => 'العقارات التجارية والاستحواذ',
                'sub_title_en' => 'We offer unique financing solutions by utilizing our own capital, resulting in a superior project structure for greater flexibility.',
                'sub_title_ar' => 'نحن نقدم حلول تمويلية فريدة من نوعها من خلال الاستفادة من رأس المال الخاص بنا، مما يؤدي إلى هيكل مشروع متفوق لتحقيق قدر أكبر من المرونة.',
                'description_en' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
                'description_ar' => 'من الحقائق الثابتة أن المحتوى المقروء لصفحة ما سيشتت انتباه القارئ عند النظر إلى شكل توضع الفقرات. يكمن الهدف من استخدام لوريم إيبسوم في توزيعه الطبيعي للأحرف، على عكس استخدام "هنا المحتوى"، "هنا المحتوى"، مما يجعله يبدو كنص مقروء.',
                'image' => 'images/img_1.jpg',
                'icon' => 'images/img_2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_en' => 'Leasing, Buying And Selling, For All Real Estate Requirements',
                'title_ar' => 'تأجير، شراء، وبيع، لجميع متطلبات العقارات',
                'sub_title_en' => 'Our dedicated team provides comprehensive services from concept to delivery.',
                'sub_title_ar' => 'يقدم فريقنا المتخصص خدمات شاملة من الفكرة حتى التسليم.',
                'description_en' => 'Our team takes care of everything from maintenance to tenant management, ensuring your property operates efficiently and effectively.',
                'description_ar' => 'يتولى فريقنا العناية بكل شيء من الصيانة إلى إدارة المستأجرين، لضمان أن تعمل ممتلكاتك بكفاءة وفعالية.',
                'image' => 'images/img_1.jpg',
                'icon' => 'images/img_3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_en' => 'Consultancy Package',
                'title_ar' => 'باقة الاستشارات',
                'sub_title_en' => 'Our experience, communication, and proactive management are vital to the delivery and success of every project.',
                'sub_title_ar' => 'خبرتنا وتواصلنا وإدارتنا الاستباقية أمر حيوي لتحقيق النجاح في كل مشروع.',
                'description_en' => 'Whether you are purchasing, refinancing, or developing properties, we offer financing options that best suit your needs.',
                'description_ar' => 'سواء كنت تشتري أو تعيد تمويل أو تطور الممتلكات، نحن نقدم خيارات تمويل تتناسب مع احتياجاتك.',
                'image' => 'images/img_1.jpg',
                'icon' => 'images/img_5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_en' => 'Brands Acquisitions',
                'title_ar' => 'الاستحواذ على العلامات التجارية',
                'sub_title_en' => 'We have a heritage of meeting our clients’ vision and goals for each project, without exception.',
                'sub_title_ar' => 'لدينا تاريخ في تلبية رؤية عملائنا وأهدافهم لكل مشروع، دون استثناء.',
                'description_en' => 'Our team analyzes the market and provides strategic investment plans tailored to your needs, ensuring high returns and minimal risks.',
                'description_ar' => 'يقوم فريقنا بتحليل السوق وتقديم خطط استثمار استراتيجية تتناسب مع احتياجاتك، مما يضمن عوائد عالية وأقل المخاطر.',
                'image' => 'images/img_1.jpg',
                'icon' => 'images/img_4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title_en' => 'Best Use Analyses',
                'title_ar' => 'تسويق العقارات',
                'sub_title_en' => 'We offer unique financing solutions by utilizing our own capital, resulting in a superior project structure for greater flexibility.',
                'sub_title_ar' => 'نحن نقدم حلول تمويلية فريدة من نوعها من خلال الاستفادة من رأس المال الخاص بنا، مما يؤدي إلى هيكل مشروع متفوق لتحقيق قدر أكبر من المرونة.',
                'description_en' => 'We leverage the latest marketing strategies and tools to attract the right buyers or tenants for your properties.',
                'description_ar' => 'نحن نستخدم أحدث استراتيجيات وأدوات التسويق لجذب المشترين أو المستأجرين المناسبين لممتلكاتك.',
                'image' => 'images/img_1.jpg',
                'icon' => 'images/img_6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_en' => 'Property Valuation',
                'title_ar' => 'تقييم الممتلكات',
                'sub_title_en' => 'We have a heritage of meeting our clients’ vision and goals for each project, without exception..',
                'sub_title_ar' => 'لدينا تاريخ في تلبية رؤية عملائنا وأهدافهم لكل مشروع، دون استثناء.',
                'description_en' => 'Our team analyzes trends, property values, and market conditions to provide you with insights that maximize your returns.',
                'description_ar' => 'يقوم فريقنا بتحليل الاتجاهات، قيم الممتلكات، وظروف السوق لتوفير رؤى تساعدك على زيادة عوائدك.',
                'image' => 'images/img_1.jpg',
                'icon' => 'images/img_7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
