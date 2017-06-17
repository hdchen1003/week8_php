<?php
$link=mysqli_connect(
	'localhost',
	'root',
	'1003',
	'hw8');
if ($link)
{
	echo "DB connected!";
}else
{
	echo "DB failed!";
}
$name = $_POST["name"];
$birth = $_POST["birth"];
$gender = $_POST["gender"];
$id = $_POST["id"];
$phone = $_POST["phone"];
$address1 =  $_POST["address1"];
$address2 =  $_POST["address2"];
$address = $address1 + $address2
$sql="INSERT INTO _hw8 (name,birth,gender,id,phone,address) VALUES ('$name','$birth','$gender','$id','$phone','$address')";
$result=mysqli_query($link,$sql);
$result=mysqli_query($link,"SELECT * FROM hw8");
echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";;
	echo "<td>";
	echo $row["name"];
	echo "</td><td>";
	echo $row["birth"];
	echo "</td><td>";
	echo $row["gender"];
	echo "</td><td>";
	echo $row["id"];
	echo "</td><td>";
	echo $row["phone"];
	echo "</td><td>";
	echo $row["address"];
	echo "</td>";
	echo "</tr>";
}
echo "<table>";
mysqli_close($link);
?>
