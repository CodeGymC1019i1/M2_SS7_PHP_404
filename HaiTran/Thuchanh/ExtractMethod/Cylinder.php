<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    private $radius;
    private $height;

    public function __construct($radius = 1, $height = 2)
    {
        $this->radius = $radius;
        $this->height = $height;
    }

    public function getVolume()
    {
        $baseArea = $this->getBaseArea();
        $perimeter = $this->getPerimeter();
        return $perimeter * $this->height + 2 * $baseArea;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public function getBaseArea()
    {
        return pi() * $this->radius ** 2;

    }
}