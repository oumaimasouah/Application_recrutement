<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $fillable = ['prenom','nom','email','login','motPasse','CIN'];

    protected $hidden = ['motPasse'];

    public function setMotPasseAttribute($value)
    {
        $this->attributes['motPasse'] = Hash::make($value);
    }
    public function getFullNameAttribute()
    {
        return "{$this->prenom} {$this->nom}";
    }

   
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function condidat()
    {
        return $this->hasOne(Condidat::class);
    }
    public function recruteur()
    {
        return $this->hasOne(Recruteur::class);
    }

   
    
}
