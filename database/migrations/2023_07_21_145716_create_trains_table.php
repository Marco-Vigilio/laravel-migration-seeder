<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 60);
            $table->string("stazione_di_partenza", 60);
            $table->string("stazione_di_arrivo", 60);
            $table->dateTime("orario_di_partenza");
            $table->dateTime("orario_di_arrivo");
            $table->smallInteger("codice_treno")->unsigned();
            $table->tinyInteger("numero_carrozze");
            $table->boolean("in_orario"); 
            $table->boolean("cancellato");
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
        Schema::dropIfExists('trains');
    }
};
