<?php

namespace App\Http\Requests;

use App\Traits\ResolvesUuids;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
            'group_uuid' => 'required|uuid|exists:groups,uuid',
            'subject_uuid' => 'required|uuid|exists:subjects,uuid',
            'teacher_uuid' => 'required|uuid|exists:teachers,uuid',
            'school_period_uuid' => 'required|uuid|exists:school_periods,uuid',




            'group_id' => 'sometimes|exists:groups,id',
            'subject_id' => 'sometimes|exists:subjects,id',
            'teacher_id' => 'sometimes|exists:teachers,id',
            'school_period_id' => 'sometimes|exists:school_periods,id',
            ];
    }
}
