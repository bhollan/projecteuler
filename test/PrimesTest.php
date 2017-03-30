<?php

/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 30/03/17
 * Time: 01:04 PM
 */

use PHPUnit\Framework\TestCase;
require 'src/Primes.php';

class PrimesTest extends TestCase
{
    protected function setUp(){
        $this-> p = new Primes();
    }
    protected function tearDown(){
        $this-> p = NULL;
    }
    public function testCanCheckIfNumberIsPrime(){
        $result = $this->p->is_prime(11);
        $this->assertEquals(true, $result);

        $result = $this->p->is_prime(17);
        $this->assertEquals(true, $result);

        $result = $this->p->is_prime(853);
        $this->assertEquals(true, $result);
    }

    public function testCanCheckIfNumberIsNotPrime(){
        $result = $this->p->is_prime(12);
        $this->assertEquals(false, $result);

        $result = $this->p->is_prime(18);
        $this->assertEquals(false, $result);

        $result = $this->p->is_prime(841);
        $this->assertEquals(false, $result);
    }

    public function testCanFindNextPrime(){
        $result = $this->p->next_prime(2);
        $this->assertEquals(3, $result);

        $result = $this->p->next_prime(7);
        $this->assertEquals(11, $result);

        $result = $this->p->next_prime(17);
        $this->assertEquals(19, $result);

        $result = $this->p->next_prime(1327);
        $this->assertEquals(1361, $result);
    }

    public function testCanFindPrimeFactors(){
        $result = $this->p->get_prime_factors(5);
        $this->assertEquals([5], $result);

        $result = $this->p->get_prime_factors(55);
        $this->assertEquals([5, 11], $result);

        $result = $this->p->get_prime_factors(56);
        $this->assertEquals([2, 2, 2, 7], $result);

        $result = $this->p->get_prime_factors(654321);
        $this->assertEquals([3, 218107], $result);
    }
}