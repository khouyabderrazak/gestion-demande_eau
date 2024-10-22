<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom') ;
            $table->string('prenom') ;
            $table->string('cin') ;
            $table->string('type_demande');
            $table->string('cin_img');
            $table->string('demande') ;
            $table->string('nom_batimant') ;
            $table->string('daaira') ;
            $table->string('province') ;
            $table->string('douar') ;
            $table->string('commune') ;
            $table->string('qiyada') ;
            $table->string('tasmime_3a9are');
            $table->string('milkiyate_3a9ar');
            $table->string('localisationPointDeau') ;
            $table->string('profendeur') ;
            $table->string('debit');
            $table->string('plan_Deau') ;
            $table->text('Message')->nullable()->default('null');
            $table->string('is_completed') ;
            $table->string('is_valide') ;
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
        Schema::dropIfExists('demandes');
    }
};
