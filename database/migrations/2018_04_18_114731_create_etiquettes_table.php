<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtiquettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiquettes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsoroots');
            $table->string('ref_eti', 50)->nullable();
            $table->integer('hauteur_eti')->nullable();
            $table->integer('largeur_eti')->nullable();
            $table->integer('diametre_eti')->nullable();
            $table->string('observation_eti', 200)->nullable();
            $table->string('photo_eti', 150)->nullable();
            $table->integer('hauteur_bobine')->nullable();
            $table->integer('diametre_bobine')->nullable();
            $table->integer('diametre_mandrin')->nullable();
            $table->integer('nbr_eti')->nullable();
            $table->string('enroulement', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etiquettes');
    }
}
