<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre' => 'required|max:75',
            'resume' => 'max:500',
            'duree' => 'required|max:6',
            'annee' => 'required|max:4',
            'lienFilm' => 'required|max:1000',
            'pochette' => 'required|max:1000',
            'type' => 'required|max:50',
            'brand' => 'required|max:150',
            'cote' => 'required|max:4',
            'rating' => 'required|max:15',
            'bannerLien' => 'required|max:1000',
            'producteur_id' => 'required|max:25',
            'realisateur_id' => 'required|max:25'
        ];
    }
    
    public function message()
    {
        return[
            'titre.max' => 'Le titre est trop long (Max: 75). ',
            'resume.max' => 'Le résume est trop long (Max: 500).',
            'duree.max' => 'La durée est trop longue (Max: 6).',
            'annee.max' => "L'année est trop longue (Max:4).",
            'lienFilm.max' => 'Le lien est trop long (Max: 1000).',
            'pochette.max' => 'Le lien est trop long (Max: 1000).',
            'type.max' => 'Le type est trop long (Max: 50).',
            'brand.max' => 'La brand est trop long (Max: 150).',
            'cote.max' => 'La côte est trop longue (Max:4).',
            'rating.max' => 'Le rating est trop long (Max: 15).',
            'bannerLien.max' => 'Le lien est trop long (Max: 1000).',
            'producteur_id.max' => "L'ID pour le producteur est beaucoup trop long, c'est le temps de faire le ménage dans votre BD.",
            'realisateur_id.max' => "L'ID pour le réalisateur est beaucoup trop long, c'est le temps de faire le ménage dans votre BD.'"
        ];
    }
}
