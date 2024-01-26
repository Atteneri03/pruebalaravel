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
            'stock' => 1,],

            ['name' => "Cardhu",
            'price' => 45.20,
            'stock' => 3,],

            ['name' => "Ramón Bilbao",
            'price' => 16.55,
            'stock' => 22,],

            ['name' => "Victoria",
            'price' => 1.25,
            'stock' => 56,]
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
       
    }
}
