<?php

namespace Kapitalonline\LaravelLangManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kapitalonline\LaravelLangManager\LaravelLangManager
 */
class LaravelLangManagerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-lang-manager';
    }
}
