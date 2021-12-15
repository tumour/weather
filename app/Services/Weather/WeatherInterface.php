<?php

namespace App\Services\Weather;

interface WeatherInterface
{
    /**
     * @param float $lat
     * @param float $lon
     * @param string $units
     * @return WeatherData|null
     */
    public function current(float $lat, float $lon, string $units): ?WeatherData;
}
