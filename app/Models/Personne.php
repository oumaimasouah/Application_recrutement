<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = ['prenom', 'nom', 'email', 'login', 'motPasse'];
}
