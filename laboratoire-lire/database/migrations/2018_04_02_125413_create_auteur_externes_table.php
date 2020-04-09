<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuteurExternesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteur_externes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_coauteur');
            $table->unsignedInteger('id_production');
            $table->text('justificatif');
            $table->string('rang_auteur') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auteur_externes');
    }
}
