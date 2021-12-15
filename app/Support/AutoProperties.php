<?php

namespace App\Support;

use Illuminate\Support\Arr;

class AutoProperties
{
    /**
     * AutoProperties constructor.
     * @param array $properties
     * @throws \Exception
     */
    public function __construct(array $properties)
    {
        $this->validate($properties);

        foreach ($properties as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            } else {
                throw new \Exception(sprintf('Invalid %s property', $key));
            }
        }
    }

    /**
     * @param array $properties
     * @throws \Exception
     */
    protected function validate(array $properties)
    {
        $notExistsProperties = [];
        foreach ($this->required() as $key) {
            if (! Arr::exists($properties, $key)) {
                $notExistsProperties[] = $key;
            } elseif (is_null($properties[$key])) {
                $notExistsProperties[] = $key;
            }
        }

        if (! empty($notExistsProperties)) {
            throw new \Exception(sprintf('Properties %s required', implode(', ', $notExistsProperties)));
        }
    }

    /**
     * @return array
     */
    protected function required(): array
    {
        return [
            //
        ];
    }
}
