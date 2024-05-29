<html>
    <heaad>
        <title>student register</title>
</head>
<body>
    <form method="POST" action="21.php">
        <center>
            <tableborder=01>
                <tr>
                    <th colspan="2"><h1>student registration</h1></th><br>
</tr>
<tr>
    <td>Admission Number</td>
    <td><input type="text" name="ad_no" placeholder="enter your admission number" autofocus></td>
</tr><br>
<tr>
    <td>Name</td>
    <td><input type="text" name="name" placeholder="enter your name"></td>
</tr><br>
<tr>
    <td>Course:</td>
    <td>
        <select name="course" id="course">
            <option value="BCA">BCA</option>
            <option value="BCOM">BCOM</option>
            <option value="BBA">BBA</option>
            <option value="BSC">BSC</option>
            <option value="BA">BA</option>
</select>
</td></tr><br>
<tr>
    <td>Gender:</td>
    <td><input type="radio" name="gender" value="MALE">MALE
    <input type="radio" name="gender" value="FEMALE">FEMALE
</td></tr><br>
<tr>
    <td>Address</td>
    <td><textarea name="Address" rows="4" cols="30" placeholder="enter your address">
</textarea>
</td>
<tr>
    <td>Contact Number</td>
    <td><input type="text" name="phone_number" id="phone_number"placeholder="enter your number" maxlength="10"></td>
</tr><br>
<tr>
    <td>Email</td>
    <td><input type="text" name="email" id="email" placeholder="enter your email"></td>
</tr><br>
<tr><td></td>
<td><input type="submit" name="save" value="save">
</td>
</tr>
</form>
</table>
</body>
</html>

<?php
$servername="localhost";
$username="root";
$password="";
$database="ddrk";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['save']))
{
    $Admission_Number=$_POST['ad_no'];
    $Name=$_POST['name'];
    $Course=$_POST['course'];
    $Gender=$_POST['gender'];
    $Address=$_POST['Address'];
    $Contact_Number=$_POST['phone_number'];
    $Email=$_POST['email'];
    if(!$conn)
    {
        die("connection failed" .mysqli_connect_error());
    }
    echo "connected successfuly";
    $itb="INSERT INTO `student`(`Admission_Number`, `Name`, `Course`, `Gender`, `Address`, `Contact_Number`, `Email`) VALUES ('[$Admission_Number]','[$Name]','[$Course]','[$Gender]','[$Address]','[$Contact_Number]','[$Email]')";
    if (mysqli_query($conn,$itb))
    {
        echo '<script> alert("new record created sucessfully")</script>';
    }
    else{
        echo '<script> alert("new record creation failed")</script>';
    }
    mysqli_close($conn);
}
?>