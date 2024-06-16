<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends  Personne
{
    use HasFactory;
    public function offresEmploi ()
    {
        return $this->hasMany(OffreEmploi::class);
    }
}
