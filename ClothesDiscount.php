<?php 

function ClothesDiscountPercent($count, $hasShirt = false, $hasTie = false)
{
	if (!is_bool($hasShirt) || !is_bool($hasTie) || !is_int($count)) return "wrong argument type";
	if ($count <= 0) return "There is 0 cloth";
	
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