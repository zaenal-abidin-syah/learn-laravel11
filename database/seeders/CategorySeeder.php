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
        //
        // Category::factory(3)->create()
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'orange'
        ]);
        Category::create([
            'name' => 'Android Programming',
            'slug' => 'android-programming',
            'color' => 'teal'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'violet'
        ]);
        Category::create([
            'name' => 'UI UX design',
            'slug' => 'ui-ux-design',
            'color' => 'purple'
        ]);
        Category::create([
            'name' => 'Python Programming',
            'slug' => 'python-programming',
            'color' => 'lime'
        ]);
    }
}
