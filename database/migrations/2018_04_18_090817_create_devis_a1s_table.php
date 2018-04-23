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
            $table->timestamps();
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsoroots');
            $table->string('nom_client', 50)->nullable();
            $table->string('adresse_client', 80)->nullable();
            $table->string('tel_client', 30)->nullable();
            $table->string('fax_client', 30)->nullable();
            $table->string('pays_client', 20)->nullable();
            $table->string('categorie_client', 25)->nullable();
            $table->string('secteur_client', 25)->nullable();
            $table->string('sousecteur_client', 25)->nullable();
            $table->string('type_client', 25)->nullable();
            $table->integer('siret_client')->nullable();
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
