<?php

namespace App\Models;

use App\Traits\UsesUuidForRoutes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class EmployeeContract extends Model
{
    use HasUuids;
    use UsesUuidForRoutes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'uuid',
        'salary',
        'start_date',
        'end_date',
        'hourly_rate',
        'employee_id',
        'contract_type_id',
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
