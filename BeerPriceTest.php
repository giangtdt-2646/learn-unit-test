<?php

use PHPUnit\Framework\TestCase;
require 'BeerPrice.php';

class BeerPriceTest extends TestCase
{
    public function test_get_beer_price()
    {
        $this->assertEquals('wrong argument type', getBeerPrice('00:00:00', true, 1));
        $this->assertEquals('wrong argument type', getBeerPrice('00:00:00', 1, true));

        $this->assertEquals(100, getBeerPrice('08:00:00', true, true));

        $this->assertEquals(290, getBeerPrice('17:00:00', true, false));
        $this->assertEquals(290, getBeerPrice('17:00:00', false, true));
        $this->assertEquals(290, getBeerPrice('17:00:00', false, false));

        $this->assertEquals(490, getBeerPrice('08:00:00', true, false));
        $this->assertEquals(490, getBeerPrice('08:00:00', false, true));
        $this->assertEquals(490, getBeerPrice('08:00:00', false, false));

    }
}

