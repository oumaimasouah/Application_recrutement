<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OffreEmploi extends Model
{
    protected $fillable = ['refEmploi', 'description', 'dateOffre'];

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class, 'demande_emplois');
    }
}
