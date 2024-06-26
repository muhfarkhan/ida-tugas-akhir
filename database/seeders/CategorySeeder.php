<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                
                'name' => 'Wisata Alam'
            ],
            [
                'name' => 'Wisata Buatan'
            ],
            [
                'name' => 'Wisata Religi'
            ]
        ];
        foreach($data as $d){
            Category::create($d);
        }
    }
}
