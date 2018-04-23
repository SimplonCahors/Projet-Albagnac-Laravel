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

            $table->string('type_machine_amont')->nullable();
            $table->string('type_convoy_amont')->nullable();
            $table->string('transfert_amont')->nullable();
            $table->string('arrivee_prod_amont')->nullable();

            $table->string('type_machine_aval')->nullable();
            $table->string('type_convoy_aval')->nullable();
            $table->string('transfert_aval')->nullable();
            $table->string('sortie_prod_aval')->nullable();

            $table->string('sens_machine')->nullable();
            $table->integer('cadence_souhaitee')->nullable();
            $table->string('milieu')->nullable();
            $table->integer('hauteur_convoyeur')->nullable();
            $table->integer('espace_au_sol')->nullable();
            $table->integer('temp_local')->nullable();
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
