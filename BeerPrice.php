<?php 

function getBeerPrice($time, $hasVoucher = false, $isFirst = false)
{
	if (!is_bool($hasVoucher) || !is_bool($isFirst)) return "wrong argument type";
	$normalPrice = 490;
	$inDiscountTimePrice = 290;
	$voucherDiscountPrice = 100;
	$discountStart = new DateTime('16:00:00');
	$discountEnd = new DateTime('17:59:59');
	$timeToByBeer = new DateTime($time);
	if ($hasVoucher && $isFirst) return $voucherDiscountPrice;

	if ($timeToByBeer >= $discountStart && $timeToByBeer <= $discountEnd) {
		return $inDiscountTimePrice;
	} 

	return $normalPrice;
}