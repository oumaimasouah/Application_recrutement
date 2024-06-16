<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Personne
{
    protected $fillable = ['refCandidat'];
    
    public function cvs()
    {
        return $this->hasMany(Cv::class);
    }
    
    public function offres()
    {
        return $this->belongsToMany(OffreEmploi::class, 'demande_emplois');
    }
}

