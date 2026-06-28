<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'personal_id',
        'uuid',
        'employee_number',
        'salary',
        'position_id',
        'hire_date',
        'employee_type_id'

    ];
}
