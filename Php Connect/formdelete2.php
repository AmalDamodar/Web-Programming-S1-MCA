<html>
<body bgccolor="Yellow">
<form action="main.html" method="post">
<center>
<?php
include_once 'conn.php';
$rid=$_POST['id'];
$sql="DELETE FROM formtble WHERE frmid='$rid'";
if(mysqli_query($conn,$sql))
{
echo "record deleted Succesfully";
}
else
{
echo "error deleting record:".mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<br>
<inputtype="submit" value="Back to Home Page" name="submit">
</center>
</body>
</html>