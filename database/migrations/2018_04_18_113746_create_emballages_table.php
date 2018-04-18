<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmballagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emballages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsolistes');

            $table->string('ref_int');
            $table->string('ref_ext');
            $table->string('forme');
            $table->integer('diametre_longueur');
            $table->integer('hauteur');

            $table->string('plein_vide');
            $table->float('temp_produit', 8, 2);
            $table->integer('poids_prod');

            $table->string('matiere');
            $table->integer('niveau_deform');
            $table->string('tolerance_dim');
            $table->text('observations');
            $table->string('url_photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emballages');
    }
}
