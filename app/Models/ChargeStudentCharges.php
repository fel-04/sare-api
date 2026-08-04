<?php

namespace App\Models;

use App\Traits\UsesUuidForRoutes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class ChargeStudentCharges extends Model
{

    use HasUuids;
    use UsesUuidForRoutes;

    protected $fillable = [
        'due_date',
        'amount',
        'student_id',
        'enrollment_id',
        'charge_type_id',
        'charge_status_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Define cuáles columnas deben recibir un UUID automático.
     *
     * @return array
     */
    public function uniqueIds(): array
    {
        return ['uuid'];
    }
}
