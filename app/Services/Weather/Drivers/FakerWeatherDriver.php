<?php

namespace App\Services\Weather\Drivers;

use App\Services\Weather\WeatherData;
use App\Services\Weather\WeatherInterface;

class FakerWeatherDriver implements WeatherInterface
{
    /**
     * FakerWeatherDriver constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Create a new resource instance.
     *
     * @return static
     */
    public static function make()
    {
        return new static();
    }

    /**
     * @param float $lat
     * @param float $lon
     * @param string $units
     * @return WeatherData|null
     * @throws \Exception
     */
    public function current(float $lat, float $lon, string $units): ?WeatherData
    {
        return new WeatherData([
            'coord_latitude' => 55.7512,
            'coord_longitude' => 37.6184,
            'temp' => 4.08,
            'feels_like' => 0.42,
            'temp_min' => 4.08,
            'temp_max' => 4.08,
            'pressure' => 1018,
            'humidity' => 76,
            'sea_level' => 1018,
            'ground_level' => 1009,
            'visibility' => 10000,
            'wind_speed' => 4.54,
            'wind_deg' => 57,
            'wind_gust' => 6.84,
            'clouds' => 100,
            'date' => 1639566661,
            'country' => 'RU',
            'sunrise' => 1639544476,
            'sunset' => 1639575091,
            'weather' => 'Clouds',
            'weather_description' => 'overcast clouds',
            'weather_icon' => '04d',
            'city' => 'Moscow'
        ]);
    }
}
