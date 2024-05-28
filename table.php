<?php
$servername="localhost";
$username="root";
$password="";
$database="test";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("connection failed" .mysqli_connect_error());
}
echo "connected succesfully";
$th="CREATE table tt(Admission_number INT AUTO_INCREMENT,Name Varchar(20) NOT NULL,COURSE VARCHAR(20)NOT NULL,GENDER VARCHAR(10) NOT NULL,PH_NUMBER int,Email VARCHAR(20),ADRESS VARCHAR(20),primary key(Admission_number))";
if(mysqli_query($conn,$th))
{
    echo " table created successfully";
}
else
echo " table creation failed";
mysqli_close($conn);
?>
