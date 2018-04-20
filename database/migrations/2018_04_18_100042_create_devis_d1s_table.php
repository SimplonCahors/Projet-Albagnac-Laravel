<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisD1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_d1s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsoroots');

            $table->string('type_machine_amont');
            $table->string('type_convoy_amont');
            $table->string('transfert_amont');
            $table->string('arrivee_prod_amont');

            $table->string('type_machine_aval');
            $table->string('type_convoy_aval');
            $table->string('transfert_aval');
            $table->string('sortie_prod_aval');

            $table->string('sens_machine');
            $table->integer('cadence_souhaitee');
            $table->string('milieu');
            $table->integer('hauteur_convoyeur');
            $table->integer('espace_au_sol');
            $table->integer('temp_local');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis_d1s');
    }
}
