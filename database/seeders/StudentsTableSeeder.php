<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

       for ($i = 0; $i < 20; $i++) {
        $newStudent = new Student();

        $newStudent->name = $faker->firstName();
        $newStudent->last_name = $faker->lastName();

        $newStudent->save();
        }
    }
}
