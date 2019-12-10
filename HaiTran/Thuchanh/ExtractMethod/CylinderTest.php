<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:56
 */
require "Cylinder.php";


class CylinderTest extends TestCase
{
    /**
     *Test
     *DisplayName("Testing getVolume(0, 0)")
     */

    public function testGetVolume($cylinder, $expected)
    {
        $volume = $cylinder->getVolume();
        $this->assertEquals($expected, $volume);
    }

    /**
     * @return array
     */

    public function testCase($radius, $height, $expected)
    {   $cylinder1 = new Cylinder($radius, $height);
        $this->testGetVolume($cylinder1, 18.84955592153876);
    }

}
