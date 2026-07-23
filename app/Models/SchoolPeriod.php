<?php

namespace App\Models;

use App\Traits\UsesUuidForRoutes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class SchoolPeriod extends Model
{

    use HasUuids;
    use UsesUuidForRoutes;

    protected $fillable = [
        'uuid',
        'name',
        'start_date',
        'end_date',
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
