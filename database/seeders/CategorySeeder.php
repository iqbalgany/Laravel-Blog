<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming',
            'color' => 'bg-red-200'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'bg-blue-200'
        ]);

        Category::create([
            'name' => 'Data Analyst',
            'slug' => 'data-analyst',
            'color' => 'bg-green-200'
        ]);
    }
}
