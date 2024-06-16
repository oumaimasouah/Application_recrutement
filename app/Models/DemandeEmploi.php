<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeEmploi extends Model
{
    use HasFactory;
    protected $fillable = ['dateDemande'];

    public function recruteurs()
    {
        return $this->belongsToMany(Recruteur::class, 'recruteur_demandeemploi', 'demandeemploi_id', 'recruteur_id');
    }

   
    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
