<?php
if (isset($_POST['submit']))
{
    $num=$_POST['number'];
    if((is_numeric($num)==1)&& $num>0)
    {
        $flag=0;
        for($i=2;$i<$num;$i++)
        {
            if($num%$i==0)
            {
                $flag=1;
                break;
            }
        }
            if($flag==0)
            echo $num. "is a prime no";
            else
            echo $num. "is not a prime no";
    }
    else
    echo "invalid input";
}
?>

<html>
    <body>
        <h2>check for prime</h2>
        <form  method="post" action="formprime.php">;
        enter a number:
        <input type="text" name="number" ><br>
        <input type="submit" name="submit">
</form>
</body>
</html>
