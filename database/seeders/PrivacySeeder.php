<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('privacy')->insert([
            [ 'name' => 'Private' ],
            [ 'name' => 'Visible to friends' ],
            [ 'name' => 'Public' ]
        ]);
    }
}
