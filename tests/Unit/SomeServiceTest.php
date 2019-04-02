<?php

namespace App\tests\Unit;

use PHPUnit\Framework\TestCase,
    App\Exceptions\UnexpectableShitException,
    App\Factories\ServicesSimpleFactory,
    App\Services\Interfaces\SomeServiceInterface;

class SomeServiceTest extends TestCase
{
    /** @var SomeServiceInterface */
    protected $someServiceObj;

    public function setUp(): void
    {
        parent::setUp();
        $this->someServiceObj = (new ServicesSimpleFactory())->createSomeService();
    }

    public function testGetDataFromExternalResource()
    {
        $result = $this->someServiceObj->getDataFromExternalResource();
        $this->assertInstanceOf(\stdClass::class, $result);
        $this->assertArrayHasKey('someKey', (array)$result);
        $this->assertArrayHasKey('someSecondKey', (array)$result);
    }

    /**
     * @throws \Exception
     */
    public function testIWannaAnException()
    {
        $this->expectException(UnexpectableShitException::class);
        $this->someServiceObj->iWannaAnException(new \DateTime());
    }

    public function testDoSomething()
    {
        $result = $this->someServiceObj->doSomething(['test']);
        $this->assertArrayHasKey('initialData', $result);
        $this->assertArrayHasKey('result', $result);
        $result = $this->someServiceObj->doSomething();
        $this->assertArrayNotHasKey('initialData', $result);
    }
}