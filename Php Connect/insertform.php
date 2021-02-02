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
$sql="INSERT INTO formtble(Name,Password,Gender,Email,Phonenumber1,Phonenumber2)VALUES('$fname,'$pass','$gen','$em','$ph1',