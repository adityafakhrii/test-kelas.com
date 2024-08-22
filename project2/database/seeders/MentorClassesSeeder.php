<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentorClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mentor_classes')->insert([
            ['mentor_id' => 1, 'class_id' => 1],
            ['mentor_id' => 2, 'class_id' => 2],
            ['mentor_id' => 3, 'class_id' => 3],
        ]);
    }
}
