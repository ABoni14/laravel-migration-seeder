<?php
use Faker\Generator as Faker;
use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i= 0; $i < 100; $i++){
            $nuovo_viaggio = new Travel();
            $nuovo_viaggio->citta = $faker->city();
            $nuovo_viaggio->paese = $faker->state();
            $nuovo_viaggio->data_di_partenza = $faker->dateTime($max = null, $timezone = null);
            $nuovo_viaggio->durata_viaggio = $faker->numberBetween(1,60);
            $nuovo_viaggio->costo = $faker->numberBetween(10,10000);
            $nuovo_viaggio->save();
        }
    }
}
