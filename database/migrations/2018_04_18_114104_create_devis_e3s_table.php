<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisE3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_e3s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('id_dso');
            $table->foreign('id_dso')->references('id')->on('dsoroots');
            $table->string('ref_emb', 50)->nullable();
            $table->string('position_emb', 50)->nullable();
            $table->string('dimension_impression_emb', 20)->nullable();
            $table->string('rem_emb', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis_e3s');
    }
}
