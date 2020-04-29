<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id_utilisateurs');
            $table->string('nom_utilisateurs');
            $table->string('prenom_utilisateurs');
            $table->string('mail_utilisateurs');
            $table->string('date_utilisateurs');
            $table->string('mdp_utilisateurs');
            $table->string('sexe_utilisateurs');
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
        Schema::dropIfExists('utilisateurs');
    }
}
