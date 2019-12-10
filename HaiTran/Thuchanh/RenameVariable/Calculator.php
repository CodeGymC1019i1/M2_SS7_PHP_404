<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 25/10/2018
 * Time: 00:02
 */
define("ADDITION", "+");
define("SUBTRACTION", "-");
define("MULTIPLICATION", "*");
define("DIVISION", "/");
define("ZERO", 0);


class Calculator
{
    public function calculate($operandFirst, $operandSecond, $operator) {
        switch ($operator) {
            case ADDITION:
                return $operandFirst + $operandSecond;
            case SUBTRACTION:
                return $operandFirst - $operandSecond;
            case MULTIPLICATION:
                return $operandFirst * $operandSecond;
            case DIVISION:
                if ($operandSecond != ZERO) {
                    return $operandFirst / $operandSecond;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
    }
}