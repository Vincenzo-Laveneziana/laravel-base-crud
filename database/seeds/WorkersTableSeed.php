<?php

use Illuminate\Database\Seeder;
use App\Worker;
use Faker\Generator as Faker;

class WorkersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Faker data

        $records = 10;

        for ($i = 0 ; $i < $records ; $i++) { 
            //random generate
            $gender = $faker->randomElement(['male', 'female']);
            $genderShort = ($gender == 'male') ? 'm' : 'f';
            $newWorker = new Worker();

            $newWorker->name = $faker->name($gender);
            $newWorker->gender = $genderShort;
            $newWorker->description = $faker->paragraph(3,true);
            $newWorker->age = $faker->numberBetween(18, 65);

            $newWorker->save();
        }
    }
}
