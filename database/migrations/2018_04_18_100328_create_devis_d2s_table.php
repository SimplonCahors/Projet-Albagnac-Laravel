<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisD2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_d2s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsoroots');

            $table->string('comm_machine_amont')->nullable();
            $table->string('comm_machine_aval')->nullable();
            $table->string('coupure_bourrage')->nullable();
            $table->string('descriptif')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis_d2s');
    }
}
