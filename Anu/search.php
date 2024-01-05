<html>
<head>
</head>
<body>
<form method="post" action="search.php">
Roll No: <input type="text" name="roll">
<input type="submit" name="search" value="Search">
</form>
<?php
$rollno=$_POST['roll'];
echo $rollno;
$conn=mysqli_connect("localhost","root","","marks");
if(!$conn)
{
echo "connection error!!";
}
else
{
echo "Connected Successfully!!";
}
$sql="select * from internal  where roll='$rollno'";
$result=mysqli_query($conn,$sql);
while($row=(mysqli_fetch_assoc($result))
{


}

?>
</body>
</html>