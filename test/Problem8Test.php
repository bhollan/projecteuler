<?php

/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 30/03/17
 * Time: 10:15 PM
 */

use PHPUnit\Framework\TestCase;
require 'src/Problem8.php';

class Problem8Test extends TestCase
{
    protected function setUp(){
        $this-> p = new Problem8();
    }
    protected function tearDown(){
        $this-> p = NULL;
    }

    public function testCanFindLargestProductInSeries(){
        $result = $this->p->largest_product_in_series(2);
        $this->assertEquals(81, $result);

        $result = $this->p->largest_product_in_series(4);
        $this->assertEquals(5832, $result);

        $result = $this->p->largest_product_in_series(13);
        $this->assertEquals(23514624000, $result);
    }

}
