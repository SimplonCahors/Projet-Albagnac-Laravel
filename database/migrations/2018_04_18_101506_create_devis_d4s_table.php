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
            $table->timestamps();
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsoroots');

            $table->boolean('controle_conformite')->nullable();
            $table->boolean('demande_fat')->nullable();
            $table->date('date_desiree_fat')->nullable()->nullable();
            $table->boolean('demande_cem')->nullable();
            $table->boolean('demande_certif_ext')->nullable();
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
