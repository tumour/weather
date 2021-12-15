<?php

namespace App\Services\Weather;

use App\Support\AutoProperties;

class WeatherData extends AutoProperties
{
    /**
     * @var float
     */
    protected $coord_latitude;

    /**
     * @var float
     */
    protected $coord_longitude;

    /**
     * @var float
     */
    protected $temp;

    /**
     * @var float
     */
    protected $feels_like;

    /**
     * @var float
     */
    protected $temp_min;

    /**
     * @var float
     */
    protected $temp_max;

    /**
     * @var int
     */
    protected $pressure;

    /**
     * @var int
     */
    protected $humidity;

    /**
     * @var int
     */
    protected $sea_level;

    /**
     * @var int
     */
    protected $ground_level;

    /**
     * @var int
     */
    protected $visibility;

    /**
     * @var float
     */
    protected $wind_speed;

    /**
     * @var int
     */
    protected $wind_deg;

    /**
     * @var float
     */
    protected $wind_gust;

    /**
     * @var int
     */
    protected $clouds;

    /**
     * @var int
     */
    protected $date;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var int
     */
    protected $sunrise;

    /**
     * @var int
     */
    protected $sunset;

    /**
     * @var string
     */
    protected $weather;

    /**
     * @var string
     */
    protected $weather_description;

    /**
     * @var string
     */
    protected $weather_icon;

    /**
     * @var string
     */
    protected $city;

    /**
     * @param $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param $weatherIcon
     * @return $this
     */
    public function setWeatherIcon($weatherIcon)
    {
        $this->weather_icon = $weatherIcon;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeatherIcon()
    {
        return $this->weather_icon;
    }

    /**
     * @param $weatherDescription
     * @return $this
     */
    public function setWeatherDescription($weatherDescription)
    {
        $this->weather_description = $weatherDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeatherDescription()
    {
        return $this->weather_description;
    }

    /**
     * @param $weather
     * @return $this
     */
    public function setWeather($weather)
    {
        $this->weather = $weather;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWeather()
    {
        return $this->weather;
    }

    /**
     * @param $sunset
     * @return $this
     */
    public function setSunset($sunset)
    {
        $this->sunset = $sunset;

        return $this;
    }

    /**
     * @return int
     */
    public function getSunset()
    {
        return $this->sunset;
    }

    /**
     * @param $sunrise
     * @return $this
     */
    public function setSunrise($sunrise)
    {
        $this->sunrise = $sunrise;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSunrise()
    {
        return $this->sunrise;
    }

    /**
     * @param $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param $clouds
     * @return $this
     */
    public function setClouds($clouds)
    {
        $this->clouds = $clouds;

        return $this;
    }

    /**
     * @return int
     */
    public function getClouds()
    {
        return $this->clouds;
    }

    /**
     * @param $windGust
     * @return $this
     */
    public function setWindGust($windGust)
    {
        $this->wind_gust = $windGust;

        return $this;
    }

    /**
     * @return float
     */
    public function getWindGust()
    {
        return $this->wind_gust;
    }

    /**
     * @param $windDeg
     * @return $this
     */
    public function setWindDeg($windDeg)
    {
        $this->wind_deg = $windDeg;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWindDeg()
    {
        return $this->wind_deg;
    }

    /**
     * @param $windSpeed
     */
    public function setWindSpeed($windSpeed)
    {
        $this->wind_speed = $windSpeed;
    }

    /**
     * @return float
     */
    public function getWindSpeed()
    {
        return $this->wind_speed;
    }

    /**
     * @param $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param $groundLevel
     * @return $this
     */
    public function setGroundLevel($groundLevel)
    {
        $this->ground_level = $groundLevel;

        return $this;
    }

    /**
     * @return int
     */
    public function getGroundLevel()
    {
        return $this->ground_level;
    }

    /**
     * @param $seaLevel
     */
    public function setSeaLevel($seaLevel)
    {
        $this->sea_level = $seaLevel;
    }

    /**
     * @return mixed
     */
    public function getSeaLevel()
    {
        return $this->sea_level;
    }

    /**
     * @param $humidity
     * @return $this
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * @return int
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @return int
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * @param $pressure
     * @return $this
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;

        return $this;
    }

    /**
     * @param $tempMax
     * @return $this
     */
    public function setTempMax($tempMax)
    {
        $this->temp_max = $tempMax;

        return $this;
    }

    /**
     * @return float
     */
    public function getTempMax()
    {
        return $this->temp_max;
    }

    /**
     * @return mixed
     */
    public function getTempMin()
    {
        return $this->temp_min;
    }

    /**
     * @param $tempMin
     * @return $this
     */
    public function setTempMin($tempMin)
    {
        $this->temp_min = $tempMin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeelsLike()
    {
        return $this->feels_like;
    }

    /**
     * @param $feelsLike
     * @return $this
     */
    public function setFeelsLike($feelsLike)
    {
        $this->feels_like = $feelsLike;

        return $this;
    }

    /**
     * @return float
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * @param $temp
     * @return $this
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * @return float
     */
    public function getCoordLatitude()
    {
        return $this->coord_latitude;
    }

    /**
     * @param $coordLatitude
     * @return $this
     */
    public function setCoordLatitude($coordLatitude)
    {
        $this->coord_latitude = $coordLatitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getCoordLongitude()
    {
        return $this->coord_longitude;
    }

    /**
     * @param $coordLongitude
     * @return $this
     */
    public function setCoordLongitude($coordLongitude)
    {
        $this->coord_longitude = $coordLongitude;

        return $this;
    }

    /**
     * @return string[]
     */
    protected function required(): array
    {
        return [
            'coord_latitude',
            'coord_longitude',
            'temp',
            'feels_like',
            'temp_min',
            'temp_max',
            'pressure',
            'humidity',

//            'sea_level',

//            'ground_level',
            'visibility',
            'wind_speed',
            'wind_deg',

            //'wind_gust',

            'clouds',
            'date',
            'country',
            'sunrise',
            'sunset',
            'weather',
            'weather_description',
            'weather_icon',
            'city',
        ];
    }
}
