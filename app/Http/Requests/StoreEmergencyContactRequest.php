<?php

namespace App\Http\Requests;

use App\Traits\ResolvesUuids;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmergencyContactRequest extends FormRequest
{

    use ResolvesUuids;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->resolveUuidsToIds();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'person_uuid' => 'required|uuid|exists:persons,uuid',
            'contact_relationship_uuid' => 'required|uuid|exists:contact_relationships,uuid',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_last_name' => 'nullable|string|max:255',
            'street' => 'required|string|max:255',
            'external_number' => 'nullable|string|max:255',
            'internal_number' => 'nullable|string|max:255',
            'neighborhood' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'country' => 'nullable|string|max:255',
            'reference' => 'nullable|string|max:255',


            'contact_relationship_id' => 'sometimes|exists:contact_relationships,id',
            'person_id' => 'sometimes|exists:persons,id',
        ];
    }
}
