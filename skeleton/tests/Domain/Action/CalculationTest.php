<?php

namespace APP\Tests\Domain\Action;

use App\Domain\Action\Calculation;
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase
{
    public function testToAddTwoInteger(): void
    {
        $numberToAdd = [10, 5];
        $calculation = new Calculation();
        $result = $calculation->addition($numberToAdd);
        $this->assertEquals(15, $result);
    }
}