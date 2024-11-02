<?php

namespace Cryptommer\Smsir;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Cryptommer\Smsir\Classes\Send Send()
 * @method static \Cryptommer\Smsir\Classes\Report Report()
 * @method static \Cryptommer\Smsir\Classes\Setting Setting()
 * @method static mixed post(string $path, array $params = [])
 * @method static mixed get(string $path, array $params = [])
 * @method static mixed delete(string $path, array $params = [])
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
