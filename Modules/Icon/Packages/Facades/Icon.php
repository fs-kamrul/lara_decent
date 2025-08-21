<?php

namespace Modules\Icon\Packages\Facades;

use Modules\Icon\Packages\Supports\IconManager;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string getDefaultDriver()
 * @method static \Modules\Icon\Packages\IconDriver createSvgDriver()
 * @method static mixed driver(string|null $driver = null)
 * @method static \Modules\Icon\Packages\Supports\IconManager extend(string $driver, \Closure $callback)
 * @method static array getDrivers()
 * @method static \Illuminate\Contracts\Container\Container getContainer()
 * @method static \Modules\Icon\Packages\Supports\IconManager setContainer(\Illuminate\Contracts\Container\Container $container)
 * @method static \Modules\Icon\Packages\Supports\IconManager forgetDrivers()
 * @method static static setConfig(array $config)
 * @method static array getConfig()
 * @method static array all()
 * @method static string render(string $name, array $attributes = [])
 * @method static bool has(string $name)
 * @method static static setIconPath(string $path)
 * @method static string iconPath()
 *
 * @see \Modules\Icon\Packages\Supports\IconManager
 * @see \Modules\Icon\Packages\IconDriver
 */
class Icon extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return IconManager::class;
    }
}
