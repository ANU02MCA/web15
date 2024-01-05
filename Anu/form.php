<html>
<head><center>
<h2>Student Information System</h2>
</head>
<style>
.regform
{
background_color=teal;
text-align:center;
width=600px;
height=700px;
margin=auto;
}
</style>
<div id="regform">
<body>
<h3>MCA Internal Examination ,December 2023</h3>
<form Name="marksform" action="form.php" method="post" onsubmit="return validate()">
Admission no:-<input type="text" name="admissionno"><br><br>
Name:-<input type="text" name="fname"><br><br>
Class:-<input type="text" name="class"><br><br>
Mark1:-<input type="text" name="mark1"><br><br>
Mark2:-<input type="text" name="mark2"><br><br>
Mark3:-<input type="text" name="mark3"><br><br>
Mark4:-<input type="text" name="mark4>"><br><br><br>
<input type="submit" name="submit" value="submit">
</form>
<script>
function validate()
{
var admissionno = document.forms["marksform"]["admissionno"].value;
var fname = document.forms["marksform"]["fname"].value;


if(fname==="")
{
alert("enter the name");
return false;
}
if(admissionno==="")
{
alert("enter the valid admission no");
return false;
}
}
</script>
<?php
$conn=mysqli_connect("localhost","root","","exam");
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
echo"connection sucess";
if(isset($_post["submit"]))
{
$fname=$_POST["fname"];
$admissionno=$_POST["admissionno"];
}
?>


</div>
</body>
</html>

