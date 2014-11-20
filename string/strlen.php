<?php

$strList = array(
	'中华人民共和国',
    'china',
    '123456',
    '2014 apec在中国'
);

header("Content-Type:text/html; charset=utf-8");
foreach ($strList as $str) {
	echo strlen($str) . "\t" . $str . "\n";
}