<html>
<head><title>Retrieve form</title>
</head>
<body bgcolor="lightpink">
<center>
<?php
include_once'conn.php';
$sql="SELECT * FROM formtable";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($results)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>Id</th>
<th>Name</thy>
<th>Password</th>
<th>Gender</th>
<th>Email</th>
<th>Phonenumber</th>
</tr>
</php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo$row["Name"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td></php echo $row["Gender"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["Phonenumber1"]; echo $row["Phonenumber2"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</tr><br><br><br>
<form method="post" action="formdelete2.php">
Enter the Id to delete:&nbsp&nbsp
<input type="text" name="id">
<br><br><br>
<input type="submit" name="Submit" value="submit">
</form>
?>
}
else
{
echo"No result found";
}
mysqli_clse($conn);
?>
</center>
</body>
</html>


