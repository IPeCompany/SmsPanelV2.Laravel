<?php

namespace Cryptommer\Smsir;

use Illuminate\Support\Facades\Facade;

/**
 * @method \Cryptommer\Smsir\Classes\Send Send()
 * @method \Cryptommer\Smsir\Classes\Report Report()
 * @method \Cryptommer\Smsir\Classes\Setting Setting()
 * @method mixed post(string $path, array $params = [])
 * @method mixed get(string $path, array $params = [])
 * @method mixed delete(string $path, array $params = [])
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
