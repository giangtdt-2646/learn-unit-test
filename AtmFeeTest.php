<?php

use PHPUnit\Framework\TestCase;
require 'AtmFee.php';

class AtmFeeTest extends TestCase
{
    public function test_get_ATM_fee()
    {
        $this->assertEquals("wrong argument type" , getATMFee('08:00:00', 'Sun', 1));

        $this->assertEquals(0, getATMFee('08:00:00', 'Sun', true));

        $this->assertEquals(110, getATMFee('08:00:00', 'Sun', false));
        $this->assertEquals(110, getATMFee('08:00:00', 'Sat', false));

        $this->assertEquals(110, getATMFee('08:44:59', 'Fri', false));
        $this->assertEquals(110, getATMFee('18:00:00', 'Fri', false));

        $this->assertEquals(0, getATMFee('17:00:00', 'Fri', false));
    }
}
