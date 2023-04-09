<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Forum;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'nama' => 'Video Games'
        ]);
        Category::create([
            'nama' => 'Gaming Gear'
        ]);
        Category::create([
            'nama' => 'Others'
        ]);
    }
}
