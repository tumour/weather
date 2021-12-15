<?php

namespace App\Services\Weather;

use App\Services\Weather\Drivers\FakerWeatherDriver;
use App\Services\Weather\Drivers\OpenWeatherMapDriver;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider
{
    /**
     * @var string[]
     */
    private $drivers = [
        'openweathermap' => OpenWeatherMapDriver::class,
        'faker' => FakerWeatherDriver::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(WeatherInterface::class, function ($app) {
            $defaultDriver = $app['config']['weather']['default'];
            $drivers = $app['config']['weather']['drivers'];

            if (! Arr::exists($this->drivers, $defaultDriver)) {
                throw new WeatherException($defaultDriver);
            }

            $driver = ucfirst($defaultDriver);

            return $this->{"register{$driver}Driver"}($drivers[$defaultDriver]);
        });
    }

    /**
     * @param array $parameters
     * @return OpenWeatherMapDriver
     */
    private function registerOpenweathermapDriver(array $parameters): OpenWeatherMapDriver
    {
        return OpenWeatherMapDriver::make($parameters['api_key']);
    }

    /**
     * @return FakerWeatherDriver
     */
    private function registerFakerDriver()
    {
        return FakerWeatherDriver::make();
    }
}
