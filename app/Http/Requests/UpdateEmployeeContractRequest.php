<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeContractRequest extends FormRequest
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
            'salary' => 'required|numeric',
            'start_date'=>'required|date',
            'hourly_rate'=>'required|int',
            'employee_uuid'=>'required|uuid|exists:employees,uuid',
            'contract_type_uuid' =>'required|uuid|exists:contract_types,uuid',

            'employee_id'=>'sometimes|exists:employees,id',
            'contract_type_id' =>'sometimes|exists:contract_types,id',
        ];
    }
}
