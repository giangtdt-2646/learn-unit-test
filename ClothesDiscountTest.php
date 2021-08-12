<?php

use PHPUnit\Framework\TestCase;
require 'ClothesDiscount.php';

class ClothesDiscountTest extends TestCase
{
    public function test_clothes_discount_percent()
    {
        $this->assertEquals('wrong argument type', clothesDiscountPercent(1, 1,1));
        $this->assertEquals('There is 0 cloth', clothesDiscountPercent(-1));
        $this->assertEquals(12, clothesDiscountPercent(7, true,true));
        $this->assertEquals(7, clothesDiscountPercent(7, true,false));
        $this->assertEquals(7, clothesDiscountPercent(7, false,true));
        $this->assertEquals(5, clothesDiscountPercent(6, true,true));

    }
}
