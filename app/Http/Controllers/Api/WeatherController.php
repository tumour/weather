<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CurrentWeatherRequest;
use App\Http\Resources\WeatherResource;
use App\Services\Weather\WeatherInterface;

class WeatherController extends Controller
{
    /**
     * @var WeatherInterface
     */
    private $weather;

    /**
     * WeatherController constructor.
     * @param WeatherInterface $weather
     */
    public function __construct(WeatherInterface $weather)
    {
        $this->weather = $weather;
    }

    /**
     * @param CurrentWeatherRequest $request
     * @return WeatherResource
     */
    public function current(CurrentWeatherRequest $request)
    {
        $weatherData = $this->weather->current($request->lat, $request->lon, $request->units);
        if ($weatherData === null) {
            abort(404);
        }

        return WeatherResource::make($weatherData);
    }
}
