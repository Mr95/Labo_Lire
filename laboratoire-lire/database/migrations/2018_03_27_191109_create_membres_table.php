<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
          
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('grade');
            $table->string('rattachement');
            $table->string('address') ;
            $table->string('num_telephone');   
            $table->string('etat_civil');
            $table->string('url_profil');
            $table->string('etat') ;
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
        Schema::dropIfExists('membres');
    }
}
