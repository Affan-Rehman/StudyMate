<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('faqs')->insert([
            'question' => "I am willing to join Studymate but I can't come on weekdays. What should I do?",
            'answer' => "If you can't attend classes on weekdays, you can explore our weekend class options. Studymate offers flexible schedules to accommodate your needs. You can join our weekend classes for the same course and receive the same quality education.",
            
        ]);
    }
}
