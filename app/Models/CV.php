<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;
    protected $fillable = ['posteocuupe','diplome','languageParlee','LieuExp','dateDebut','dateFin','niveauLangue',
    'Logiciels','dureeFormation','languageProgrammation','lieuFormation','anneeDiplome','mention'
];

public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    public function demandeEmploi()
    {
        return $this->belongsTo(DemandeEmploi::class);
    }

   
    public function getFormattedDateDebutAttribute()
    {
        return \Carbon\Carbon::parse($this->dateDebut)->format('d-m-Y');
    }

    public function getFormattedDateFinAttribute()
    {
        return \Carbon\Carbon::parse($this->dateFin)->format('d-m-Y');
    }

    
    public function scopeWithLanguage($query, $language)
    {
        return $query->where('languageParlee', $language);
    }
}


