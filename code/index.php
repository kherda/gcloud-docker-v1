<?php

$redis = new Redis();
//Connecting to Redis server on localhost
$redis->connect('redis', 6379);


$value = $redis->get("ctr");
$redis->incr("ctr");

echo $value;
