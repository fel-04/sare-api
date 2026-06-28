<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SistemConfig extends Model
{
    protected $fillable = [
        'key',
        'value',
    ];
}
