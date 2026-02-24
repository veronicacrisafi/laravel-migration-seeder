<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//import per i faker
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 20; $i++) {
            //importo il model e creo l'istanza
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween('now', '+2 days');
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween($newTrain->orario_di_partenza, '+4 hours');
            $newTrain->codice_treno = $faker->bothify('??###');
            $newTrain->totale_carrozze = $faker->numberBetween(5, 20);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
