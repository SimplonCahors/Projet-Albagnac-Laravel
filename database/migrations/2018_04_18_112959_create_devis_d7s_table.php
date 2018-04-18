<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisD7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_d7s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsolistes');

            $table->integer('quantite');
            $table->boolean('cd');
            $table->boolean('numerique');
            $table->string('langue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis_d7s');
    }
}
