<?php

namespace App\Services\Interfaces;

interface SomeServiceInterface
{
    public function doSomething(array $data = []): ?array;

    public function getDataFromExternalResource(): \stdClass;

    public function iWannaAnException(\DateTime $dateTime): void;
}