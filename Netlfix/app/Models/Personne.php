<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $table = 'Personnes';
    use HasFactory;
    protected $fillable = ['prenom', 'nom', 'date', 'photo', 'wikiLien', 'rolePrincipal'];

    // belongsTo (à juste 1)
    // hasMany (est dans plusieurs)
    // belongsToMany

    public function films()
    {
        return $this->belongsToMany(Film::class);
    }
    public function filmsRealises()
    {
        return $this->hasMany(Film::class, 'realisateur_id');
    }

    public function filmsProduits()
    {
        return $this->hasMany(Film::class, 'producteur_id');
    }

    public function filmsDedans()
    {
        return $this->hasMany(Film::class, 'id');
    }
}
