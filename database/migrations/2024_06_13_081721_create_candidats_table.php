<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personne_id')->constrained('personnes');
            $table->string('refCandidat')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidats');
    }
}