<?php

/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 4/04/17
 * Time: 08:19 PM
 */
use PHPUnit\Framework\TestCase;
require 'src/Problem10.php';

class Problem10Test extends TestCase
{

    protected function setUp(){
        $this-> p = new Problem10();
    }
    protected function tearDown(){
        $this-> p = NULL;
    }

    public function testCanSumPrimesBelowX(){
//        $this->assertEquals(142913828922, $this->p->sum_primes_limit(2000000));
        $this->assertEquals(77, $this->p->sum_primes_limit(20));
    }
}
