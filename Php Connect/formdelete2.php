<html>
<body bgccolor="Yellow">
<form action="main.html" method="post">
<center>
<?php
include_once 'conn.php';
$rid=$_POST['id'];
$sql="DELETE FROM reg_form WHERE id='$rid'";
if(mysqli_query($conn,$sql))
{
echo "Record Deleted Succesfully";
}
else
{
echo "Error Deleting Record:".mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<br>
<inputtype="submit" value="Back to Home Page" name="submit">
</center>
</body>
</html>