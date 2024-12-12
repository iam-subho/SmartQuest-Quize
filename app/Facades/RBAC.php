<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Services\RBAC
 */
class RBAC extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \App\Services\RBAC::class;
    }
}