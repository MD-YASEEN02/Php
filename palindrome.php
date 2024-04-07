<?php
$a=121;
$temp=$a;
while($a>0)
{
$r=$a%10;
$rev=$rev*10+$r;
$a=(int)($a/10);
}
if($temp==$rev)
echo $temp. "is a palindrome";
else
echo $temp. " is not a a plaindrome";
?>