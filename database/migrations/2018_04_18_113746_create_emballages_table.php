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
            $table->timestamps();
            $table->unsignedInteger('id_dso')->nullable();
            $table->foreign('id_dso')->references('id')->on('dsoroots')->nullable();

            $table->string('ref_int')->nullable();
            $table->string('ref_ext')->nullable();
            $table->string('forme')->nullable();
            $table->integer('diametre_longueur')->nullable();
            $table->integer('hauteur')->nullable();

            $table->string('plein_vide')->nullable();
            $table->float('temp_produit', 8, 2)->nullable();
            $table->integer('poids_prod')->nullable();

            $table->string('matiere')->nullable();
            $table->integer('niveau_deform')->nullable();
            $table->string('tolerance_dim')->nullable();
            $table->text('observations')->nullable();
            $table->string('url_photo')->nullable();
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
