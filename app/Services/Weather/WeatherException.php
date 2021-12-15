<?php

namespace App\Services\Weather;

class WeatherException extends \Exception
{
    /**
     * WeatherException constructor.
     * @param string $notAllowedDriver
     */
    public function __construct(string $notAllowedDriver)
    {
        parent::__construct(sprintf('Not found driver %s for weather service.', $notAllowedDriver));
    }
}
