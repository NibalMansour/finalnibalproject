<?php

namespace Database\Seeders;


use Faker\Factory as Faker;


use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Number;
use PhpParser\Node\Scalar\Int_;

class studentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();     
        for ($i = 0; $i < 50; $i++) {                                                                                                                             
DB::table('students')->insert([
    'first_name' => $faker->name,
    'last_name'=> $faker->name,
    'father_name'=> $faker->name,
    'email'=> $faker->email,
    'class' => $faker->numberBetween(1, 12),
    'phon'=> $faker->phoneNumber,
    'adress'=> $faker->address,
   
    
   
]);}

}
}

