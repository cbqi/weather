<?php
/**
 * Created by PhpStorm.
 * User: chenbangqi <1506035688@qq.com>
 * Date: 2019/11/25
 * Time: 17:21
 */

namespace Cbq\Weather;


class WeatherServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function () {
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}