<?php

namespace App;

use App\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testTrue()
    {
        $calculator = new Calculator();

        $actual = $calculator->add(3, 4);

        $this->assertEquals(7, $actual);
    }
}
