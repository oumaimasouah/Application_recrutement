<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $fillable = [
        'refCv', 'refProfessionnelle', 'refLinguistique', 'refFormation',
        'refDiplome', 'infoInformatique', 'diplome', 'languesParlees', 
        'lieuExp', 'dateDebut', 'dateFin', 'niveauLangue', 'logiciels', 
        'dureeFormation', 'langageProgrammation', 'logicielUtilise', 'fonction', 
        'titreDiplome', 'mention'
    ];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
