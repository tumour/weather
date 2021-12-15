<?php

namespace Tests\Unit\Service\Weather;

use App\Services\Weather\WeatherData;
use Tests\TestCase;

class WeatherDataTest extends TestCase
{
    /**
     * @var array
     */
    protected $weather_data = [
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
    ];

    /**
     * @throws \Exception
     */
    public function test_weather_data_class()
    {
        $weatherData = new WeatherData($this->weather_data);

        $this->assertEquals($weatherData->getCoordLatitude(), $this->weather_data['coord_latitude']);
        $this->assertEquals($weatherData->getCoordLongitude(), $this->weather_data['coord_longitude']);
        $this->assertEquals($weatherData->getTemp(), $this->weather_data['temp']);
        $this->assertEquals($weatherData->getFeelsLike(), $this->weather_data['feels_like']);
        $this->assertEquals($weatherData->getTempMin(), $this->weather_data['temp_min']);
        $this->assertEquals($weatherData->getTempMax(), $this->weather_data['temp_max']);
        $this->assertEquals($weatherData->getPressure(), $this->weather_data['pressure']);
        $this->assertEquals($weatherData->getHumidity(), $this->weather_data['humidity']);
        $this->assertEquals($weatherData->getSeaLevel(), $this->weather_data['sea_level']);
        $this->assertEquals($weatherData->getGroundLevel(), $this->weather_data['ground_level']);
        $this->assertEquals($weatherData->getVisibility(), $this->weather_data['visibility']);
        $this->assertEquals($weatherData->getWindSpeed(), $this->weather_data['wind_speed']);
        $this->assertEquals($weatherData->getWindDeg(), $this->weather_data['wind_deg']);
        $this->assertEquals($weatherData->getWindGust(), $this->weather_data['wind_gust']);
        $this->assertEquals($weatherData->getClouds(), $this->weather_data['clouds']);
        $this->assertEquals($weatherData->getDate(), $this->weather_data['date']);
        $this->assertEquals($weatherData->getCountry(), $this->weather_data['country']);
        $this->assertEquals($weatherData->getSunrise(), $this->weather_data['sunrise']);
        $this->assertEquals($weatherData->getSunset(), $this->weather_data['sunset']);
        $this->assertEquals($weatherData->getWeather(), $this->weather_data['weather']);
        $this->assertEquals($weatherData->getWeatherDescription(), $this->weather_data['weather_description']);
        $this->assertEquals($weatherData->getWeatherIcon(), $this->weather_data['weather_icon']);
        $this->assertEquals($weatherData->getCity(), $this->weather_data['city']);
    }
}
