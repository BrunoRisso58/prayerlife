<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'No category',
                'is_general' => true
            ],
            [
                'name' => 'Protection',
                'is_general' => true
            ],
            [
                'name' => 'Finances',
                'is_general' => true
            ],
            [
                'name' => 'Health',
                'is_general' => true
            ],
            [
                'name' => 'World Peace',
                'is_general' => true
            ],
            [
                'name' => 'Family',
                'is_general' => true
            ],
            [
                'name' => 'Missions',
                'is_general' => true
            ],
            [
                'name' => 'Wisdom',
                'is_general' => true
            ],
            [
                'name' => 'Work',
                'is_general' => true
            ],
            [
                'name' => 'Friends',
                'is_general' => true
            ],
            [
                'name' => 'Church',
                'is_general' => true
            ],
        ]);
    }
}
