<?php

namespace App\Factories;

use App\Services\Interfaces\SomeServiceInterface,
    App\Services\SomeService;

class ServicesSimpleFactory
{
    /**
     * @return SomeServiceInterface
     */
    public function createSomeService(): SomeServiceInterface
    {
        return new SomeService();
    }
}