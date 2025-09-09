<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cms_settings')->insert([
            'phone1' => '+965 5122 0400',
            'phone2' => '+965 88888888',
            'email1' => 'info@storat-re.com',
            'email2' => 'info@storat.com',
            'address' => '1st Floor, Masila Ventures Co, Offices, Noor Investment Building, Opposite Salhia Complex.',
            'instagram' => 'https://instagram.com/',
            'linkedin'  => 'https://linkedin.com/',
            'facebook'  => 'https://facebook.com',
            'twitter'   => 'https://twitter.com',
        ]);
    }
}
