<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condidat extends Personne
{
    use HasFactory;
    public function cvs()
    {
        return $this->hasMany(CV::class);
    }
    
    public function offresEmploiConsultes()
    {
        return $this->belongsToMany(OffreEmploi::class, 'candidat_offreemploi', 'candidat_id', 'offreemploi_id');
    }

    public function demandesEmploiPostulees()
    {
        return $this->hasMany(DemandeEmploi::class);
    }
}
