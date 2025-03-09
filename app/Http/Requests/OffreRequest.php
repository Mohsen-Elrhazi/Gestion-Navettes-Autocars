<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OffreRequest extends FormRequest
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
        // return [
        //     'start_city'       => 'required|string|max:255',
        //     'end_city'         => 'required|string|max:255',
        //     'start_date'       => 'required|date|after_or_equal:today',
        //     'end_date'         => 'required|date|after:start_date',
        //     'start_time'       => 'required|date_format:H:i',
        //     'end_time'         => 'required|date_format:H:i|after:start_time',
        //     'available_seats'  => 'required|integer|min:1|',
        //     'total_seats'      => 'required|integer|min:1',
        //     'description'      => 'nullable|string|max:500',
        // ];
        return [
            'start_city'       => 'required|string|max:255',
            'end_city'         => 'required|string|max:255',
            'start_date'       => 'required|date|',
            'end_date'         => 'required|date|',
            'start_time'       => 'required|',
            'end_time'         => 'required|',
            'available_seats'  => 'required|integer',
            'total_seats'      => 'required|integer',
            'description'      => 'required|string|max:500',
        ];
    }

    /**
     * Messages personnalisés pour les erreurs de validation.
     */
    public function messages()
    {
        return [
            'start_city.required'      => 'La ville de départ est obligatoire.',
            'end_city.required'        => 'La ville d\'arrivée est obligatoire.',
            'start_date.required'      => 'La date de départ est obligatoire.',
            'start_date.after_or_equal'=> 'La date de départ ne peut pas être dans le passé.',
            'end_date.required'        => 'La date de fin est obligatoire.',
            'end_date.after'           => 'La date de fin doit être après la date de départ.',
            'start_time.required'      => 'L\'heure de départ est obligatoire.',
            'end_time.required'        => 'L\'heure d\'arrivée est obligatoire.',
            'end_time.after'           => 'L\'heure d\'arrivée doit être après l\'heure de départ.',
            'available_seats.min'      => 'Il doit y avoir au moins un siège disponible.',
            'total_seats.required'     => 'Le nombre total de sièges est obligatoire.',
            'description.required'     => 'La description est obligatoire.',
        ];
    }
}