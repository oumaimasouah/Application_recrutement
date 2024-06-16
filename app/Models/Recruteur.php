<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruteur extends Personne
{
    use HasFactory;
    public function offresEmploi()
    {
        return $this->hasMany(OffreEmploi::class);
    }

    public function demandesEmploiConsultes()
    {
        return $this->belongsToMany(DemandeEmploi::class, 'recruteur_demandeemploi', 'recruteur_id', 'demandeemploi_id');
    }
}
