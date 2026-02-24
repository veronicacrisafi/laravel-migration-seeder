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
        $aziende = ['Trenitalia', 'Italo', 'Frecciarossa', 'Trenord', 'Circumvesuviana', 'Ferrovie Sud Est', 'SNCF', 'DB', 'ÖBB', 'Renfe'];

        for ($i = 0; $i < 20; $i++) {
            //importo il model e creo l'istanza
            $newTrain = new Train();
            $newTrain->azienda = $faker->randomElement($aziende);
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $partenza = $faker->dateTimeBetween('now', '+2 days');
            $arrivo = $faker->dateTimeBetween($partenza, (clone $partenza)->modify('+4 hours'));
            $newTrain->orario_di_partenza = $partenza;
            $newTrain->orario_di_arrivo = $arrivo;
            $newTrain->codice_treno = $faker->bothify('??###');
            $newTrain->totale_carrozze = $faker->numberBetween(5, 20);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
