<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['password', 'email', 'email', 'nom' , 'prenom' , 'adresse'];

    public function rendezVouse(): HasMany
    {
        return $this->hasMany(RendezVouse::class);
    }
}
