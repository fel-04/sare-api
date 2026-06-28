<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonAddress extends Model
{
    protected $fillable = [
        'person_id',
        'street',
        'external_number',
        'internal_number',
        'neighborhood',
        'city',
        'state',
        'postal_code',
        'country',
        'reference',
    ];
}
