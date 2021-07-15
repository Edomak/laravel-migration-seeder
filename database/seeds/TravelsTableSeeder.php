<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTravel = config('travel');

        foreach ($arrayTravel as $item) {

            $travel = new Travel();

            $travel->data_arrivo = $item["data_arrivo"];
            $travel->data_partenza = $item["data_partenza"];
            $travel->num_persone = $item["num_persone"];
            $travel->notti_totali = $item["notti_totali"];
            $travel->struttura_pernottamento = $item["struttura_pernottamento"];
            $travel->descrizione = $item["descrizione"];
            $travel->prezzo_totale = $item["prezzo_totale"];
            $travel->is_available = $item["is_available"];

            $travel->save();

        }

    }
}
