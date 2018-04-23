<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisD5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_d5s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsoroots');

            $table->boolean('install_client')->nullable();
            $table->boolean('plan_prevention')->nullable();
            $table->boolean('mise_en_route')->nullable();
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
        Schema::dropIfExists('devis_d5s');
    }
}
