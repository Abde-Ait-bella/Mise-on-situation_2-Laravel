<?php

namespace Database\Seeders;

use App\Models\tagArticles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tagArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tagArticles::factory(10)->create();
    }
}
