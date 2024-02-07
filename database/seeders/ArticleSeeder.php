<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            ['name' => "Ron Zacapa",
            'price' => 59.90,
            'stock' => 1,
            'category_id' =>1,
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
        ],

            ['name' => "Cardhu",
            'price' => 45.20,
            'stock' => 3,
            'category_id' =>1,
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),],

            ['name' => "Ramón Bilbao",
            'price' => 16.55,
            'stock' => 22,
            'category_id' =>1,
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),],

            ['name' => "Victoria",
            'price' => 1.25,
            'stock' => 56,
            'category_id' =>1,
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),],

            ['name' => "Coca Cola",
            'price' => 1.25,
            'stock' => 156,
            'category_id' =>2,
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),]

        ];

        foreach ($articles as $article) {
            Article::create($article);
        }

    }
}
