<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    protected $fillable = [
        'person_id',
        'contact_relationship_id',
        'name',
        'last_name',
        'second_last_name',
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
