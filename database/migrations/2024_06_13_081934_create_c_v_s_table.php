<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidat_id')->constrained('candidats');
            $table->string('refCv')->unique();
            $table->string('refProfessionnelle');
            $table->string('refLinguistique');
            $table->string('refFormation');
            $table->string('refDiplome');
            $table->text('infoInformatique');
            $table->string('diplome');
            $table->string('languesParlees');
            $table->string('lieuExp');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->string('niveauLangue');
            $table->string('logiciels');
            $table->integer('dureeFormation');
            $table->string('langageProgrammation');
            $table->string('logicielUtilise');
            $table->string('fonction');
            $table->string('titreDiplome');
            $table->string('mention');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}