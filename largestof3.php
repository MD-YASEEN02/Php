<?php
$a=10;
$b=3456;
$c=765;
if($a>$b && $a>$c)
  {
	$big=$a;
   }
elseif($b>$c)
  {
	$big=$b;
   }
else
  {
	$big=$c;
   }
echo $big. "is maximum among ".$a." , ".$b." and ".$c."";
?>
