<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->date("data_arrivo");
            $table->date("data_partenza");
            $table->integer("num_persone")->default(1);
            $table->integer("notti_totali")->default(1);
            $table->string("struttura_pernottamento", 50);
            $table->Text("descrizione")->nullable();
            $table->float("prezzo_totale", 6, 2);
            $table->boolean('is_available')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
