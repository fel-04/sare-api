<?php

namespace App\Http\Requests;

use App\Traits\ResolvesUuids;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    use ResolvesUuids;

    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->resolveUuidsToIds();
    }

    public function rules(): array
    {
        return [
            'employee_number' => 'required|string|max:10',
            'rfc' => 'required|string|max:13',

            'person_uuid' => 'required|uuid|exists:persons,uuid',
            'position_uuid' => 'required|uuid|exists:positions,uuid',

            'work_shift_uuid' => 'nullable|uuid|exists:work_shifts,uuid',

            'hire_date' => 'required|date',


            'person_id' => 'sometimes|exists:persons,id',
            'position_id' => 'sometimes|exists:positions,id',
            'work_shift_id' => 'sometimes|exists:work_shifts,id',
        ];
    }
}