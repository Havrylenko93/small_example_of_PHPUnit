<?php

namespace App\tests\Unit;

use PHPUnit\Framework\TestCase,
    App\Factories\ServicesSimpleFactory,
    App\Services\Interfaces\SomeServiceInterface;

class ServicesSimpleFactoryTest extends TestCase
{
    public function testCreateSomeService()
    {
        $someServiceObject = (new ServicesSimpleFactory())->createSomeService();
        $this->assertInstanceOf(SomeServiceInterface::class, $someServiceObject);
    }
}