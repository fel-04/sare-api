<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'student_number' => 'required|unique:students,student_number',
            'enrollment_date' => 'required|date|after_or_equal:today',
            'admission_date' => 'required|date|after_or_equal:today',
            'person_id' => 'required|exists:persons,id',
            'status_student_id' => 'required|exists:status_students,id',
        ];
    }
}
