<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Usager extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'Usagers';
    protected $fillable = [ 'email', 
                            'password',
                            'nomUsager', 
                            'nom', 
                            'prenom', 
                            'role',];


    protected $hidden = [
                         'password',
                         'remember_token',];
}
