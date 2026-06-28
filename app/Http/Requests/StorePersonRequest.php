<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|max:255',
            'lastname' =>'required|string|max:255',
            'second_lastname' =>'required|string|max:255',
            'birthdate' =>'required|date|',
            'gender_id' =>'required|exists:genders,id',
            'phone' =>'nullable|string|max:15',
            'cel_phone' =>'required|string|max:15',
            'curp' =>'required|string|min:18|max:18|unique:persons,curp',

        ];


    }
}
