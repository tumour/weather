<?php

namespace Tests\Feature\Api\Weather;

use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

/**
 * Class CurrentWeatherTest
 * @package Tests\Feature\Api\Weather
 * @coversDefaultClass \App\Http\Controllers\Api\WeatherController
 */
class CurrentWeatherTest extends TestCase
{
    /**
     * @test
     * @throws \Throwable
     */
    public function can_successful_test()
    {
        $response = $this->json('GET', route('weather.show.current', [
            'lat' => 55.751244,
            'lon' =>  37.618423,
            'units' => 'metric'
        ]));

        $response->assertSuccessful();
        $response->assertJsonStructure(['data']);
    }

    /**
     * @test
     */
    public function can_validation_exception_test()
    {
        // Not found lat
        $response = $this->json('GET', route('weather.show.current', [
            'lon' =>  37.618423,
            'units' => 'metric'
        ]));
        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
        $response->assertSee('The lat field is required.');

        // Not found lon
        $response = $this->json('GET', route('weather.show.current', [
            'lat' => 55.751244,
            'units' => 'metric'
        ]));
        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
        $response->assertSee('The lon field is required.');

        // Not found metric
        $response = $this->json('GET', route('weather.show.current', [
            'lat' => 55.751244,
            'lon' =>  37.618423,
        ]));
        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
        $response->assertSee('The units field is required.');

        // Invalid metric
        $response = $this->json('GET', route('weather.show.current', [
            'lat' => 55.751244,
            'lon' =>  37.618423,
            'units' => 'metric333'
        ]));
        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
        $response->assertSee('The selected units is invalid.');
    }
}
