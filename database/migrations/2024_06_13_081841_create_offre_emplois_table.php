<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreEmploisTable extends Migration
{
    public function up()
    {
        Schema::create('offre_emplois', function (Blueprint $table) {
            $table->id();
            $table->string('refEmploi')->unique();
            $table->text('description');
            $table->date('dateOffre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offre_emplois');
    }
}
