<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 24/10/2018
 * Time: 23:43
 */

require __DIR__ . "Calculator.php";
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {
        list($operandFirst, $operandSecond, $operator, $expected) = $this->testCase();

        $calculator = new Calculator();
        $result = $calculator->calculate($operandFirst, $operandSecond, $operator);
        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function testCase()
    {
        $operandFirst = 1;
        $operandSecond = 1;
        $operator = '+';

        $expected = 2;
        return array($operandFirst, $operandSecond, $operator, $expected);
    }


}