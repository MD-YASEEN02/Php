<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die("econnection failed" .mysqli_connect_error());
}
echo "connected succesfully <br>";
$db="create database myaseen";
if(mysqli_query($conn,$db))
{
    echo" database created successfully";
}
else
echo " databse creation failed";
mysqli_close($conn);
?>
