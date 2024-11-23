<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class educations extends Seeder
{
    public function run()
    {
        // Biodata
        DB::table('educations')->insert([
            [
                'period' => '2021 - 2023',
                'title' => 'Social Sciences Department',
                'institution' => 'Zion Senior High School Makassar',
            ],
            [
                'period' => '2023 - present',
                'title' => 'Full Stack Development Informatics Department',
                'institution' => 'Ciputra University Surabaya',
            ],
        ]);
    }
}
