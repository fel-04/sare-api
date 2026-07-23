<?php

namespace App\Models;

use App\Traits\UsesUuidForRoutes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
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
        'group_id',
        'subject_id',
        'teacher_id',
        'school_period_id',
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
