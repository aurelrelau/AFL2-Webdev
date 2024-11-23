<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        // Biodata
        DB::table('profiles')->insert([
            'name' => 'Aurelia Nata',
            'age' => 19,
            'email' => 'nataaureliadavineputri@gmail.com',
            'phone' => '+62 813 4249 6226',
            'residence' => 'Indonesia',
            'education' => '3rd Semester',
            'about' => 'Hi, I’m Aurelia! Currently, I am a 3rd semester student at Universitas Ciputra Makassar, majoring in IMT - App Development. I am currently learning a lot about frontend development, including how to design an attractive and easy-to-use interface using HTML, CSS, and JavaScript.',
        ]);
    }
}
