<?php
echo "todays date in various formats";
echo "today is" .date("y/m/d")."<br>";
echo "today is" .date("y,M,d,D")."<br>";
echo "today is" .date("y-F-d,ls")."<br>";
date_default_timezone_set("Asia/Calcutta")."<br>";
echo "todays date is" .date("h:i:sa")."<br>";
$d=mktime(13,14,23,12,5,2020);
echo "created date is".date("y-m-d h:i:sa",$d)."<br>";
$s=strtotime("tomorrow");
echo date("y-m-d h:i:sa")."<br>";
