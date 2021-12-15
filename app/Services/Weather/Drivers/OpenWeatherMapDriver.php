<?php

namespace App\Services\Weather\Drivers;

use App\Services\Weather\WeatherData;
use App\Services\Weather\WeatherInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class OpenWeatherMapDriver implements WeatherInterface
{
    public const VERSION = 2.5;

    /**
     * @var string
     */
    protected $apiDomain = 'https://api.openweathermap.org/data/2.5';

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * OpenWeatherMapDriver constructor.
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param string $apiDomain
     * @return $this
     */
    public function setApiDomain(string $apiDomain)
    {
        $this->apiDomain = $apiDomain;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiDomain()
    {
        return $this->apiDomain;
    }

    /**
     * Create a new resource instance.
     *
     * @param  mixed  ...$parameters
     * @return static
     */
    public static function make(...$parameters)
    {
        return new static(...$parameters);
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
        $response = $this->request('weather', [
            'lat' => $lat,
            'lon' => $lon,
            'units' => $units
        ]);

        if (! $response->successful()) {
            return null;
        }

        return $this->makeWeatherData($response->json());
    }

    /**
     * @param array $response
     * @return WeatherData
     * @throws \Exception
     */
    protected function makeWeatherData(array $response)
    {
        return new WeatherData([
            'coord_latitude'         => $response['coord']['lat'],
            'coord_longitude'        => $response['coord']['lon'],
            'temp'                  => $response['main']['temp'],
            'feels_like'            => $response['main']['feels_like'],
            'temp_min'              => $response['main']['temp_min'],
            'temp_max'              => $response['main']['temp_max'],
            'pressure'              => $response['main']['pressure'],
            'humidity'              => $response['main']['humidity'],
            'sea_level'             => Arr::get($response['main'], 'sea_level', 0),
            'ground_level'          => Arr::get($response['main'], 'grnd_level', 0),
            'visibility'            => $response['visibility'],
            'wind_speed'            => $response['wind']['speed'],
            'wind_deg'              => $response['wind']['deg'],
            'wind_gust'             => Arr::get($response['wind'], 'gust', 0),
            'clouds'                => $response['clouds']['all'],
            'date'                  => $response['dt'],
            'country'               => $response['sys']['country'],
            'sunrise'               => $response['sys']['sunrise'],
            'sunset'                => $response['sys']['sunset'],
            'weather'               => Arr::get($response['weather'], '0.main'),
            'weather_description'   => Arr::get($response['weather'], '0.description'),
            'weather_icon'          => Arr::get($response['weather'], '0.icon'),
            'city'                  => $response['name'],
        ]);
    }

    /**
     * @param string $method
     * @param array $parameters
     * @return \Illuminate\Http\Client\Response
     */
    protected function request(string $method, array $parameters)
    {
        return Http::get(
            $this->apiDomain . '/' . $method,
            array_merge($parameters, ['appid' => $this->apiKey])
        );
    }
}
