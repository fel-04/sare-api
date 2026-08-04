<?php

namespace App\Http\Requests;

use App\Traits\ResolvesUuids;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEnrollmentRequest extends FormRequest
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
            'enrollment_date' =>'required|date|',
            'student_uuid' =>'required|uuid|exists:students,uuid',
            'group_uuid' =>'required|uuid|exists:groups,uuid',
            'school_period_uuid' =>'required|uuid|exists:school_periods,uuid',

            'student_id' =>'sometimes|exists:students,id',
            'group_id' =>'sometimes|exists:groups,id',
            'school_period_id' =>'sometimes|exists:school_periods,id',
            ];
    }
}
