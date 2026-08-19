<?php

namespace App\Models;

use App\Traits\UsesUuidForRoutes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasUuids;
    use UsesUuidForRoutes;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'person_id',
        'professional_license',
        'status_teacher_id',
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
