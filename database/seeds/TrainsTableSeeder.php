<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->azienda = 'Trenord';
        $train->stazione_partenza = 'Como';
        $train->stazione_arrivo = 'Milano';
        $train->orario_partenza = '08:30';
        $train->orario_arrivo = '09:30';
        $train->codice_treno = 375920;
        $train->numero_carrozze = 9;
        $train->in_orario = false;

        $train->save();
    }
}
