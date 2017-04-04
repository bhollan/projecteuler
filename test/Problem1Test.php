<?php

/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 30/03/17
 * Time: 09:20 PM
 */

use PHPUnit\Framework\TestCase;
require 'src/Problem1.php';

class Problem1Test extends TestCase
{
    protected function setUp(){
        $this-> p = new Problem1;
    }
    protected function tearDown(){
        $this-> p = NULL;
    }

    public function testCanSum3sAnd5s(){
        $result = $this->p->sum3sAnd5s(10);
        $this->assertEquals(23, $result);

        $result = $this->p->sum3sAnd5s(100);
        $this->assertEquals(2318, $result);

        $result = $this->p->sum3sAnd5s(1000);
        $this->assertEquals(233168, $result);
    }
}
