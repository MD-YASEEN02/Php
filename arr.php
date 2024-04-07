<?php
$arr=array(45,78,90,12);
$insert=122;
echo "given array is: <br>";
foreach($arr as $value)
echo $value. "<br>";
array_splice($arr,2,0,222);
echo "after insertion of 222 the array is:<br>";
foreach($arr as $value)
echo $value. "<br>";
?>