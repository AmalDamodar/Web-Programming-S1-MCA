<html>
<body bgcolor ="Yellowgreen">
<form action ="main.html" method="post">
<center>
<br>
<br>
<?php
include_once'conn.php';
if(isset($_POST['submit']))
{
$fname=$_POST['uname'];
$pass=$_POST['password'];
$gen=$_POST['gender'];
$em=$POST['email'];
$ph1=$_POST['code'];
$ph2=$_POST[phno'];
$sql="INSERT INTO formtble(Name,Password,Gender,Email,Phonenumber1,Phonenumber2)VALUES('$fname,'$pass','$gen','$em','$ph1','$ph2')";
if(mysqli_query($conn,$sql)) {
  echo "New Record Created Successfully !<br>";
}
else
{
echo "error: ".$ mysqli_error($conn);
}
mysqli_close($conn);
?>
<br><br><input type="submit" value=" Back to homepage " name="submit">
</center>
</body>
</html>