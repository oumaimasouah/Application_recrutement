<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeEmploisTable extends Migration
{
    public function up()
    {
        Schema::create('demande_emplois', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidat_id')->constrained('candidats');
            $table->foreignId('offre_emploi_id')->constrained('offre_emplois');
            $table->string('refDemande')->unique();
            $table->date('dateDemande');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('demande_emplois');
    }
}