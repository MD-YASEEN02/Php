<?php
$a=1234;
$temp=$a;
$rev=0;
$sum=0;
while($a>0)
{
$r=$a%10;
$rev=$rev*10+$r;
$sum=$sum+$r;
$a=(int)($a/10);
}
echo "reverse of the given no" .$temp. "is" .$rev. "<br>";
echo "sum of the given no" .$temp. "is" .$sum;
?>  