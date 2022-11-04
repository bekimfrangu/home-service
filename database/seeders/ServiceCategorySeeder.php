<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
        [
            'name'=>'ABC',
            'slug' => 'abc',
            'image' => '1521969345.png'
        ],
        [
            'name'=>'Engineering',
            'slug' => 'engineering',
            'image' => '1521969522.png'
        ],
        [
            'name'=>'Home',
            'slug' => 'home',
            'image' => '1521969622.png'
        ],
        [
            'name'=>'Electrical',
            'slug' => 'electrical',
            'image' => '1521969446.png'
        ],
        [
            'name'=>'Plumbing',
            'slug' => 'plumbing',
            'image' => '1521969409.png'
        ],
        [
            'name'=>'Roof',
            'slug' => 'roof',
            'image' => '1521969490.png'
        ]
    ]);
    }
}
