<?php

$log = '124.117.219.254 - - [14/Nov/2014:11:37:24 +0800] "GET /path/to/file?ver=2.1&from= HTTP/1.1" 200 17897 "http://www.tabalt.net/" "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.5 Safari/537.36" 701 0.097 0.097';

//匹配ip、时间、query string

$pattern = '/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)[^[]+\[(.+)\][^?]+\?([\S]+).+$/';
preg_match($pattern, $log, $matches);

print_r($matches);