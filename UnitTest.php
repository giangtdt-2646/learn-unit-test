<?php

use PHPUnit\Framework\TestCase;
require 'BeerPrice.php';
require 'AtmFee.php';
require 'ClothesDiscount.php';

class UnitTest extends TestCase
{
    public function test_get_beer_price()
    {
        $this->assertEquals(490, getBeerPrice());
        $this->assertEquals(100, getBeerPrice(true, true));
        $this->assertEquals(490, getBeerPrice(true, false));
        $this->assertEquals('wrong argument type', getBeerPrice(1,1));
    }

    public function test_get_ATM_fee()
    {
        $this->assertEquals(0, getATMFee(true));
        $this->assertEquals(110, getATMFee());
        $this->assertEquals(110, getATMFee());
        $this->assertEquals("wrong argument type", getATMFee(11));
    }

    public function test_clothes_discount_percent()
    {
        $this->assertEquals('wrong argument type', clothesDiscountPercent(1, 1,1));
        $this->assertEquals('There is 0 cloth', clothesDiscountPercent(-1));
        $this->assertEquals(12, clothesDiscountPercent(7, true,true));
        $this->assertEquals(7, clothesDiscountPercent(7, true,false));
        $this->assertEquals(7, clothesDiscountPercent(7, false,true));
        $this->assertEquals(5, clothesDiscountPercent(6, true,true));
    }
};
