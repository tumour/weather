<?php

return [

    'default' => env('WEATHER_DRIVER', 'openweathermap'),

    'drivers' => [

        'openweathermap' => [
            'api_key' => env('OPEN_WEATHER_MAP_API_KEY', null),
        ],

        'faker' => [
            //
        ],

    ],

];
