<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeEmploi extends Model
{
    protected $fillable = ['refDemande', 'dateDemande'];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    public function offreEmploi()
    {
        return $this->belongsTo(OffreEmploi::class);
    }
}