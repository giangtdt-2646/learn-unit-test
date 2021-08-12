<?php

use PHPUnit\Framework\TestCase;
require 'BeerPrice.php';

class BeerPriceTest extends TestCase
{
    public function test_get_beer_price()
    {
        $this->assertEquals(490, getBeerPrice());
        $this->assertEquals(100, getBeerPrice(true, true));
        $this->assertEquals(490, getBeerPrice(true, false));
        $this->assertEquals('wrong argument type', getBeerPrice(1, 1));
    }
}

