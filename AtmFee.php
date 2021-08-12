<?php 

function getATMFee($time, $day, $isVipUser = false)
{
	if (!is_bool($isVipUser)) return "wrong argument type";

	if ($isVipUser) return 0;

	if (in_array($day,['Sat', 'Sun'])) return 110;

	$current = new DateTime($time);
	if ($current >= new DateTime('00:00:00') && $current <= new DateTime('08:44:59')
		|| $current >= new DateTime('18:00:00') && $current <= new DateTime('23:59:59')) {
		return 110;
	}

	return 0;
}