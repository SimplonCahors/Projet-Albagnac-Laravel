<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisA1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_a1s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsolistes');
            $table->string('nom_client', 50);
            $table->string('adresse_client', 80);
            $table->string('tel_client', 30);
            $table->string('fax_client', 30);
            $table->string('pays_client', 20);
            $table->string('categorie_client', 25);
            $table->string('secteur_client', 25);
            $table->string('sousecteur_client', 25);
            $table->string('type_client', 25);
            $table->integer('siret_client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis_a1s');
    }
}
