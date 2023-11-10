<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'Films';
    use HasFactory;
    protected $fillable = ['titre', 'resume', 'duree', 'annee', 'lienFilm', 'pochette', 'type', 'brand', 'cote', 'rating', 'bannerLien', 'producteur_id', 'realisateur_id'];

    // belongsTo (à juste 1)
    // hasMany (est dans plusieurs)
    // belongsToMany 
    public function realisateur()
    {
        return $this->belongsTo(Personne::class);
    }

    public function producteur()
    {
        return $this->belongsTo(Personne::class);
    }

    public function acteurs()
    {
        return $this->belongsToMany(Personne::class);
    }
}
