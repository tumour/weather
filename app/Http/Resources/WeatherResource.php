<?php

namespace App\Http\Resources;

use App\Services\Weather\WeatherData;
use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    /**
     * @var WeatherData
     */
    public $resource;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $weatherData = $this->resource;

        return [
            'coord_latitude'        => $weatherData->getCoordLatitude(),
            'coord_longitude'       => $weatherData->getCoordLongitude(),
            'temp'                  => $weatherData->getTemp(),
            'feels_like'            => $weatherData->getFeelsLike(),
            'temp_min'              => $weatherData->getTempMin(),
            'temp_max'              => $weatherData->getTempMax(),
            'pressure'              => $weatherData->getPressure(),
            'humidity'              => $weatherData->getHumidity(),
            'sea_level'             => $weatherData->getSeaLevel(),
            'ground_level'          => $weatherData->getGroundLevel(),
            'visibility'            => $weatherData->getVisibility(),
            'wind_speed'            => $weatherData->getWindSpeed(),
            'wind_deg'              => $weatherData->getWindDeg(),
            'wind_gust'             => $weatherData->getWindGust(),
            'clouds'                => $weatherData->getClouds(),
            'date'                  => $weatherData->getDate(),
            'country'               => $weatherData->getCountry(),
            'sunrise'               => $weatherData->getSunrise(),
            'sunset'                => $weatherData->getSunset(),
            'weather'               => $weatherData->getWeather(),
            'weather_description'   => $weatherData->getWeatherDescription(),
            'weather_icon'          => $weatherData->getWeatherIcon(),
            'city'                  => $weatherData->getCity(),
        ];
    }
}
