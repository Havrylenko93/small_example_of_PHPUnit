<?php

namespace App\Services;

use App\Services\Interfaces\SomeServiceInterface,
    App\Exceptions\UnexpectableShitException;

class SomeService implements SomeServiceInterface
{
    /** @var array */
    protected $data = [];
    protected $anotherService;

    public function __construct()
    {
        $this->anotherService = new AnotherService();
    }

    /**
     * @param array $data
     * @return array|null
     */
    public function doSomething(array $data = []): ?array
    {
        $resultArray = [];

        if (!empty($data)) {
            $resultArray['initialData'] = $data;
        }

        $resultArray['result'] = array_reverse(['3', '2', '1']);

        return $resultArray;
    }

    /**
     * @return \stdClass
     */
    public function getDataFromExternalResource(): \stdClass
    {
        return (object)['someKey' => 'someData', 'someSecondKey' => 'someMoreData'];
    }

    /**
     * @param \DateTime $dateTime
     * @throws UnexpectableShitException
     */
    public function iWannaAnException(\DateTime $dateTime): void
    {
        if ($dateTime->format('Y') === '2019') {
            throw new UnexpectableShitException('eeemm.... smthg went wrong?');
        }
    }

    public function getDataFromAnotherService(): array
    {
        return $this->anotherService->getData();
    }
}
