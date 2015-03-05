<?php
$prefix = 'rand-string-prefix';
$suffix = 'rand-string-suffix';

$randString = sha1($prefix . md5($prefix . mt_rand(0,9999) . time() . mt_rand(0,9999) . $suffix) . $suffix);

echo "{$randString}\n";