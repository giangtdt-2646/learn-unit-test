<?php 

function ClothesDiscountPercent($count, $hasShirt = false, $hasTie = false)
{
    if (is_bool($hasShirt) && is_bool($hasTie) && is_int($count) && $count > 0) {
    $quantityDiscount = 7;
    $clothesTypeDiscount  = 5;

    if ($count >= 7) {
        if ($hasShirt && $hasTie) {
            return $quantityDiscount + $clothesTypeDiscount;
        }
        return $quantityDiscount;
    }

    if ($hasShirt && $hasTie) return $clothesTypeDiscount;

    return 0;
    }
    return "wrong argument type";
}