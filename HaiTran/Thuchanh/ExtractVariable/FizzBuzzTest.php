<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 5:03 PM
 */

include_once('FizzBuzz.php');
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function testFizzBuzz($status, $expected)
    {
        $this->assertEquals($expected, $status);
    }
    public function testCase($number, $expected)
    {
        $fizzBuzz = new FizzBuzz();
        $status = $fizzBuzz->setStatus($number);
        $this->testFizzBuzz($status, $expected."");
    }
}