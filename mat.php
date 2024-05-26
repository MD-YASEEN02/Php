<html>
<head>
    <title> matrices</title>
</head>
    <body>
        <form method="post" action="mat.php";
        <h1 align="center">Matrix addition</h1>
        <table>
            <tr>
                <td><h4>Matrix A</h4></td>
                <td>enter [0][0]</td>
                <td><input type="text" name="M100" required>
            </tr>
            <tr>
                <td>enter [0][1]</td>
                <td><input type="text" name="M101" required>
                </td>
            </tr>
            <tr>
                <td>enter[1][0]</td>
                <td><input type="text" name="M110" required>
                </td>
            </tr>
            <tr>
                <td>enter[1][1]</td>
                <td><input type="text" name="M111" required>
                </td>
            </tr>
            <tr><td><h4>Matrix b</h4></td></tr>
            <tr><td>enter [0][0]</td>
                <td><input type="text" name="M200" required>
                </td>
            </tr>
            <tr>
                <td>enter[0][1]</td>
                <td><input type="text" name="M201" required>
                </td>
            </tr>
            <tr>
                <td>enter[1][0]</td>
                <td><input type="text" name="M210" required>
                </td>
            </tr>
            <tr>
                <td>enter[1][1]</td>
                <td><input type="text" name="M211" required>
                </td>
            </tr>
            <tr><td></td>
                <td><input type="submit" name="ADD">
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>


<?php
if(isset($_POST['ADD']))
{
    $M100=$_POST["M100"];
    $M101=$_POST["M101"];
    $M110=$_POST["M110"];
    $M111=$_POST["M111"];  
    $M200=$_POST["M200"];
    $M201=$_POST["M201"];
    $M210=$_POST["M210"];
    $M211=$_POST["M211"];

    $matrix1=array(array($M100,$M101),array($M110,$M111));
    $matrix2=array(array($M200,$M201),array($M210,$M211));
    $m=count($matrix1);
    $n=count($matrix1[0]);
    echo "<hr color='blue'>";
    echo "<h2>matrix a</h2><br>";
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<$m;$j++)
        {
            echo $matrix1[$i][$j]."";
        }
    }
    echo "<hr color='red'>";
    echo "<h2>matrix b</h2><br>";
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<$m;$j++)
        {
            echo $matrix2[$i][$j]."";
        }
    }
    echo "<hr color='blue'>";
    echo "<h2>addition of two matrices</h2><br>";
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<$m;$j++)
        {
            $ADD[$i][$j]=$matrix1[$i][$j]+$matrix2[$i][$j];
        }
    }
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<$m;$j++)
        {
            echo $ADD[$i][$j]."<br>";
        }
        //echo "<br>";
    }
}







