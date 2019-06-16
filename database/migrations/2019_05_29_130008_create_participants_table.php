<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('civilite');
            $table->string('nom', 30);
            $table->string('prenom', 30);
            $table->date('date_naissance');
            $table->string('email', 150);
            $table->string('tele', 50);
            $table->string('adresse', 255);
            $table->string('cp', 20);
            $table->string('ville', 50);
            $table->string('reparateur_ad', 80);
            $table->string('no_facture_code_jeu', 100);
            $table->date('date_facture');
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
        Schema::dropIfExists('participants');
    }
}
