<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class teacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $faker = Faker::create();  
        for ($i = 0; $i < 50; $i++) {                                                                                                                             
DB::table('teachers')->insert([
    'first_name' => $faker->name,
    'last_name'=> $faker->name,
    'father_name'=> $faker->name,
    'email'=> $faker->email,
    'class' => $faker->numberBetween(1, 12),
    'phon'=> $faker->phoneNumber,
    'adress'=> $faker->address,
    'subject_id'=> \App\Models\Subject::inRandomOrder()->first()->id,
    
   
]);}

}
}



