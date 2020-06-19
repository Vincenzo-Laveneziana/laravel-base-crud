<?php

use Illuminate\Database\Seeder;
use App\Client;
use Faker\Generator as Faker;
class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Client::truncate();

        //Faker data
        $records = 10;

        for ($i = 0 ; $i < $records ; $i++) { 
            //random generate
            $gender = $faker->randomElement(['male', 'female']);
            $genderShort = ($gender == 'male') ? 'm' : 'f';
            $newClient = new Client();

            $newClient->name = $faker->name($gender);
            $newClient->gender = $genderShort;
            $newClient->description = $faker->paragraph(3,true);
            $newClient->age = $faker->numberBetween(18, 65);

            $newClient->save();
        }
    }
}
