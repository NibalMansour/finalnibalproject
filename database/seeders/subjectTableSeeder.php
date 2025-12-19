<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class subjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); 
        $subjects = ['رياضيات', 'علوم', 'لغة عربية', 'لغة إنجليزية', 'تاريخ', 'جغرافيا', 'فيزياء', 'كيمياء', 'أحياء', 'فن', 'موسيقى', 'رياضة'];   
        for ($i = 0; $i <12 ; $i++){
             Db::table('subjects')->insert([
            'subjectname' => $faker-> $subjects[$i],//randomElement($subjects),
        ]);
        }
       
    
    }
}


