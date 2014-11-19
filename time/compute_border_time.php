<?php

/**
 * 计算边界时间
 * @param int $timestamp
 * @return array
 */
function computeBorderTime($timestamp) {
    $dividend = 5;
    $minute = date('i', $timestamp);

    $beginMinute = sprintf("%02d", $minute - $minute % $dividend);
    $endMinute = sprintf("%02d", $beginMinute + $dividend - 1);

    $result = array(
        'begin_time' => date("Y-m-d H:{$beginMinute}:00", $timestamp),
        'end_time' => date("Y-m-d H:{$endMinute}:59", $timestamp)
    );
    return $result;
}

$dateList = array(
    '2014-10-28 00:00:00',
    '2014-10-28 23:59:59',
    '2014-03-01 08:05:00',
    '2014-03-01 08:35:00',
    '2014-10-28 11:00:00',
    '2014-10-28 11:59:59',
    '2014-10-28 11:03:01',
    '2014-10-28 11:36:07',
);

foreach ($dateList as $date) {
	$time = strtotime($date);
	$result = computeBorderTime($time);
	echo "{$date}\n{$result['begin_time']}\n{$result['end_time']}\n";
	echo "\n--------------\n";
}