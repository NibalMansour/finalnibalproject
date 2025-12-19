<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class studentDegreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();  
        for ($i = 0; $i < 50; $i++) {   
    $degree = $faker->numberBetween(0, 100);                                                                                                                          
         DB::table('student_degrees')->insert([
    
    'degree' =>$degree,//$faker->numberBetween(0, 100),
    
    'student_id'=> \App\Models\Student::inRandomOrder()->first()->id,
    'subject_id'=> \App\Models\Subject::inRandomOrder()->first()->id,
    'succuss' =>$degree >=50 ? '1' : '0',
   
]);}
    }
}


