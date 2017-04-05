<?php

/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 4/04/17
 * Time: 06:09 PM
 */

use PHPUnit\Framework\TestCase;
require 'src/Problem9.php';

class Problem9Test extends TestCase
{
    protected function setUp(){
        $this-> p = new Problem9();
    }
    protected function tearDown(){
        $this-> p = NULL;
    }

    public function testCanFindTriplet(){
        $result = $this->p->triplet(1000);
        $this->assertEquals(31875000,$result);
    }

}

