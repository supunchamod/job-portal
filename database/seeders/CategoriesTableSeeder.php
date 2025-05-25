<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $categories = [
            ['name' => 'Information Technology', 'slug' => 'it', 'icon' => 'fas fa-laptop-code'],
            ['name' => 'Healthcare', 'slug' => 'healthcare', 'icon' => 'fas fa-medkit'],
            ['name' => 'Finance', 'slug' => 'finance', 'icon' => 'fas fa-chart-line'],
            ['name' => 'Education', 'slug' => 'education', 'icon' => 'fas fa-graduation-cap'],
            ['name' => 'Marketing', 'slug' => 'marketing', 'icon' => 'fas fa-bullhorn'],
            ['name' => 'Engineering', 'slug' => 'engineering', 'icon' => 'fas fa-cogs'],
            ['name' => 'Design', 'slug' => 'design', 'icon' => 'fas fa-paint-brush'],
            ['name' => 'Customer Service', 'slug' => 'customer-service', 'icon' => 'fas fa-headset'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
