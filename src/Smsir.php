<?php

namespace Cryptommer\Smsir;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cryptommer\Smsir\Skeleton\SkeletonClass
 */
class Smsir extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Smsir';
    }
}
