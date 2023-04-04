<?php namespace LaravelMasterPackage\Curl\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static \LaravelMasterPackage\Curl\Builder to(string $url)
 */
class Curl extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Curl';
    }

}
