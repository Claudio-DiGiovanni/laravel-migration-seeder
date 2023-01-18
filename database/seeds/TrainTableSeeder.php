<?php

use Faker\Generator as Faker;
use App\Train;

use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 250; $i++) {
            $trains = new Train();
            $trains->azienda = $faker->randomElement(['Trenord', 'Trenitalia', 'Italo', 'Frecciarossa']);
            $trains->stazione_partenza = $faker->countryCode();
            $trains->stazione_arrivo = $faker->countryCode();
            $trains->partenza = $faker->time();
            $trains->arrivo = $faker->time();
            $trains->codice_treno = $faker->randomNumber(5, true);
            $trains->n_carrozze = $faker->numberBetween(5, 20);
            $trains->puntuale = $faker->numberBetween(0, 1);
            $trains->cancellato = ($trains->puntuale == 1 ? ($faker->numberBetween(0, 1)) : null);
            $trains->save();
        }
    }
}
