<?php

namespace App\Traits;

trait UsesUuidForRoutes
{
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }
}