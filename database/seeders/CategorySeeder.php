<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Bebidas alcoholicas'],
            ['name' => 'Refrescos'],
            ['name' => 'Comida'],
            ['name' => 'Zumos']
        ];

        Category::insert($categories);
    }
}
