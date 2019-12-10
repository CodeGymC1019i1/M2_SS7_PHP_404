<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 4:36 PM
 */
define("ZERO",0);

class FizzBuzz
{
    public $status;


    public function __construct($status = "")
    {
        $this->status = $status;
    }

    public function setStatus($number)
    {
        $isFizz = $this->isDivisionBy3($number);
        $isBuzz = $this->isDivisionBy5($number);
        if($isFizz && $isBuzz) {
            $this->status =  "FizzBuzz";
        } elseif ($isFizz) {
            $this->status = "Fizz";
        } elseif ($isBuzz) {
            $this->status = "Buzz";
        } else {
            $this->status =  $number."";
        }
    }

    /**
     * @param $number
     * @return bool
     */
    public function isDivisionBy3($number)
    {
        if ($number % 3 == ZERO)
        return true;
        return false;
    }

    /**
     * @param $number
     * @return bool
     */
    public function isDivisionBy5($number)
    {
        if ($number % 5 == ZERO)
            return true;
        return false;
    }
}