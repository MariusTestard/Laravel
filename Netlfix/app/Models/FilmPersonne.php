<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmPersonne extends Model
{
    protected $table = 'Film_personne';
    use HasFactory;
    protected $fillable = ['film_id', 'personne_id'];
}
