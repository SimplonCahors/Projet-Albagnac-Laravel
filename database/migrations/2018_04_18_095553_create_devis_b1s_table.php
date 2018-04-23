<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisB1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_b1s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsoroots');
            $table->string('besoin', 50)->nullable();
            $table->string('rem_besoin', 100)->nullable();
            $table->string('fournisseur_actuel', 30)->nullable();
            $table->string('nom_concurrent', 30)->nullable();
            $table->string('type_concurrent', 50)->nullable();
            $table->string('rem_concurrent', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis_b1s');
    }
}
