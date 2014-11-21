<?php

header("Content-Type:text/html; charset=utf-8");

$array = array(
    'name' => '小明',
    'age' => 20,
);

echo serialize($array) . "\n-------------\n";
