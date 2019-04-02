<?php

namespace App\Services;

use App\Services\Interfaces\SomeServiceInterface;

class SomeService implements SomeServiceInterface
{
    protected $data = [];

    public function doSomething(array $data = []): ?array
    {

    }

    public function getDataFromExternalResource(): \stdClass
    {

    }

    public function iWannaAnException(\DateTime $dateTime): void
    {
        if($dateTime->format('Y') === '2019') {
            throw new \Exception('eeemm.... smthg went wrong?');
        }
    }
}
