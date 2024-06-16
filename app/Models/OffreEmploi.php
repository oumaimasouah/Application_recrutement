<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreEmploi extends Model
{
    use HasFactory;
    protected $fillable = ['description','dateOffre'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function recruteur()
    {
        return $this->belongsTo(Recruteur::class);
    }

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class, 'candidat_offreemploi', 'offreemploi_id', 'candidat_id');
    }
}
