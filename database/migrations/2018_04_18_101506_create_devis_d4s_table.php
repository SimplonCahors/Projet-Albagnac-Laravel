<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisD4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_d4s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsolistes');

            $table->boolean('controle_conformite');
            $table->boolean('demande_fat');
            $table->date('date_desiree_fat')->nullable();
            $table->boolean('demande_cem');
            $table->boolean('demande_certif_ext');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis_d4s');
    }
}
