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
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsolistes');
            $table->string('ref_eti', 50);
            $table->integer('hauteur_eti');
            $table->integer('largeur_eti');
            $table->integer('diametre_eti');
            $table->string('observation_eti', 200);
            $table->string('photo_eti', 150);
            $table->integer('hauteur_bobine');
            $table->integer('diametre_bobine');
            $table->integer('diametre_mandrin');
            $table->integer('nbr_eti');
            $table->string('enroulement', 150);
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
