<html>

<head>

<title> Retrive data</title>

</head>

<body bgcolor="Lightgreen">

<center>

<?php

include_once 'conn.php'; $sql = "SELECT * FROM formtble"; $result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0)

{

?>

<br><br>

<table border="2">

<tr>

<th>ld</th>

<th>Name</th>

<th>Password</th>

<th>Gender</th>

<th>Email</th>

<th>Phonenumber</th>

</tr>

<?php

Si=0;

while($row = mysqli_fetch_assoc($result)) {

?>

<tr>

<td><?php echo $row["frmid"]; ?></td>

<td><?php echo Srow["Name"); ?></td> <td><?php echo $row["Password"); ?></td> <td><?php echo $row["Gender"); ?></td>

<td><?php echo $row["Email"); ?></td> <td><?php echo Srow["Phonenumber1"); echo Srow"Phonenumber2"); ?></td>

</tr>

<?php

Şi++;

}

?>

</table>

</tr><br><br><br>

<form method="post" action="formupdate2.php"> Enter the Id to Update:&nbsp&nbsp

<input type="text" name="id"

<br><br><br>

<input type="submit" name="Submit" value="submit">

</form>

<?php
}

else{

echo "No result found";

}

mysqli_close($conn);

?>

</center>

</body>

</html>