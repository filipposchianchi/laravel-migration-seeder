<?php

use App\Fumetti;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class FumettoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for($i = 0; $i<10; $i++){
            
            $data = [
                "titolo" => $faker -> sentence($nbWords = 3, $variableNbWords = true),
                "autore" => $faker -> lastName,
                "anno" =>  $faker -> year($max = 'now'),
                "recensione" => $faker -> paragraph($nbSentences = 3, $variableNbSentences = true),
                "voto" => $faker -> randomFloat($nbMaxDecimals = 1, $min = 1, $max = 10)
            ];

            $fumetto = new Fumetti;
            $fumetto -> fill($data);
            $fumetto -> save();
        }
    }
}
