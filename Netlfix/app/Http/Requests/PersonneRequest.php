<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneRequest extends FormRequest
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
            'prenom' => 'required|max:50',
            'nom' => 'required|max:50',
            'photo' => 'required|max:1000',
            'rolePrincipal' => 'required|max:25',
            'wikiLien' => 'required|max:150',
            'date' => 'required|date'
        ];
    }
    
    public function message()
    {
        return[
            'nom.max' => 'Le nom est trop long (Max: 50). ',
            'prenom.max' => 'Le prénom est trop long (Max: 50).',
            'photo.max' => "L'url est trop long (Max: 1000).",
            'wikiLien.max' => 'Le lien est trop long (Max:150).',
            'rolePrincipal.max' => 'Le rôle principal est trop long (Max: 25).'
        ];
    }
}
