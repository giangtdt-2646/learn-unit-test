<?php

use PHPUnit\Framework\TestCase;
require 'AtmFee.php';

class AtmFeeTest extends TestCase
{
    public function test_get_ATM_fee()
    {
        $this->assertEquals(0, getATMFee(true));
        $this->assertEquals(110, getATMFee());
        $this->assertEquals(110, getATMFee());
        $this->assertEquals("wrong argument type", getATMFee(11));
    }
}
