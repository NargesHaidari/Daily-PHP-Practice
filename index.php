<?php

date_default_timezone_set("Asia/Karachi");

echo date("Y-m-d");
echo "<br>";

echo date("H:i:s");
echo "<br>";

echo date("Y-m-d H:i:s");
echo "<br>";

echo date("l, F d, Y");
echo "<br>";

$now = time();

echo $now;
echo "<br>";

echo date("Y-m-d H:i:s", $now);
echo "<br>";

$tomorrow = strtotime("+1 day");
echo date("Y-m-d", $tomorrow);
echo "<br>";

$nextWeek = strtotime("+1 week");
echo date("Y-m-d", $nextWeek);
echo "<br>";

$yesterday = strtotime("-1 day");
echo date("Y-m-d", $yesterday);
echo "<br>";

$date1 = strtotime("2026-09-10");
$date2 = strtotime("2026-09-20");

echo ($date2 - $date1) / 86400;
?>