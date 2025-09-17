<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Source images in /public/assets/images
        $sourceMain = public_path('assets/images/img_39.png');
        $sourceInner = public_path('assets/images/img_28.png');

        // Destination folder inside storage/app/public
        $destinationFolder = 'about-us-images';

        // Filenames
        $mainFilename = 'img_27.png';
        $innerFilename = 'img_28.png';

        // Copy main image if exists
        if (File::exists($sourceMain)) {
            Storage::disk('public')->put(
                $destinationFolder . '/' . $mainFilename,
                File::get($sourceMain)
            );
        }

        // Copy inner image if exists
        if (File::exists($sourceInner)) {
            Storage::disk('public')->put(
                $destinationFolder . '/' . $innerFilename,
                File::get($sourceInner)
            );
        }

        // Insert into DB
        DB::table('about_sections')->insert([
            'title_en' => 'STORAT',
            'title_ar' => 'ستورات',
            'subtitle_en' => 'Real Estate Consultancy Co.',
            'subtitle_ar' => 'شركة استشارات عقارية',
            'description_en' => '
    Put your Real Estate needs in our hands and lets be your Property Department,
    nowadays having your Property Department becoming an old school, the growth of
    telecommuting Laptops, Smartphone and other movers means testimony to the idea
    that more and more people are leaving the tradition offices behind, currently
    work is something you do, and no longer a location.

    Forecast and trends are uniform and projecting exponential growth in companies and
    individual choosing to work more virtually yet professionally, they call it the work
    life balance, and STORAT Real Estate Consultancy Co. leading the Real Estate
    Consultancy with economic shift by choices available nowhere else.

    STORAT Real Estate Consultancy Co. is a professional Real Estate office provides you
    the best services but it’s all fraction on the tradition cost, all the services are
    customized to the client by the client, and according to their budget, there is no
    one size fits all.

    Our services and application are across every element at commercial Real Estate
    industry whether its Large corporates, professional, small business, office personal,
    Retail in all segments, it works better and it cost less it’s really that simple.

    Your timing is good too, knowledge is power, and knowledge is stronger with high
    credibility to deliver it to you.
',
            'description_ar' => '
    ضع احتياجاتك العقارية بين أيدينا ودعنا نكون قسم العقارات الخاص بك،
    في الوقت الحاضر أصبح وجود قسم عقارات داخلي أمراً قديماً، فمع نمو العمل عن بُعد
    باستخدام أجهزة الحاسوب المحمولة والهواتف الذكية وغيرها، أصبح واضحاً أن المزيد
    والمزيد من الناس يتركون المكاتب التقليدية خلفهم، فالعمل اليوم هو ما تقوم به،
    وليس مكاناً تتواجد فيه.

    التوقعات والاتجاهات تشير إلى نمو هائل في الشركات والأفراد الذين يفضلون العمل
    بشكل افتراضي ولكن باحترافية، ويسمون ذلك التوازن بين العمل والحياة، وشركة ستورات
    للاستشارات العقارية تقود هذا التحول الاقتصادي بخيارات لا تتوفر في أي مكان آخر.

    شركة ستورات للاستشارات العقارية هي مكتب عقاري محترف يقدم لك أفضل الخدمات
    ولكن بتكلفة أقل بكثير من التكاليف التقليدية، فجميع الخدمات يتم تخصيصها
    للعميل من قبل العميل، وبما يتناسب مع ميزانيته، فلا يوجد حل واحد يناسب الجميع.

    خدماتنا وتطبيقاتنا تغطي جميع عناصر قطاع العقارات التجارية سواء للشركات الكبرى،
    أو المحترفين، أو الأعمال الصغيرة، أو الموظفين المكتبيين، أو التجزئة في جميع
    القطاعات، فهي تعمل بشكل أفضل وتكلف أقل، الأمر في غاية البساطة.

    توقيتك مناسب أيضاً، فالمعرفة قوة، والمعرفة أقوى عندما تكون مصحوبة بمصداقية عالية
    لتوصيلها إليك.
',
            'image_main' => $destinationFolder . '/' . $mainFilename,   // stored in storage/app/public/about-us-images
            'image_inner' => $destinationFolder . '/' . $innerFilename, // stored in storage/app/public/about-us-images
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
