<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('c_v_s', function (Blueprint $table) {
            $table->id();
            $table->string("posteocuupe");
            $table->string("diplome");
            $table->string("languageParlee");
            $table->string("LieuExp");
            $table->date("dateDebut");
            $table->date("dateFin");
            $table->string("niveauLangue");
            $table->string("Logiciels");
            $table->string("dureeFormation");
            $table->string("languageProgrammation");
            $table->string("lieuFormation");
            $table->string("anneeDiplome");
            $table->string("mention");
            $table->foreignId('candidat_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_v_s');
    }
};
