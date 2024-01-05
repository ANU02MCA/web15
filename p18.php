<DOCTYPE! html>

<html>

<head>

<style>
body{
  padding: 80px;
}
#regform{
background-color: lightblue;
border-style: double;
border-width: thick;
text-align: center;
font-size: 20px;
align-items: center;
width: 700;
height:900;
margin:auto;
}
table,tr,td,th{

border: 1px solid black;

}
</style>

</head>

<body>

<div id="regform">
<br>
<h3> Book Log</h3>

<form name="marksForm" action="p18.php" method="post">

<label for="bid">Book ID</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" id="bid" name="bid" > <br><br>
<label for="title">Book name</label>&nbsp;&nbsp;

<input type="text" id="name" name="name" > <br><br>

<label for="author">Author</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" id="author" name="author" > <br><br>

<label for="edition">Edition</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" id="edition" name="edition" ><br><br>

<label for="publisher">Publisher</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" id="publisher" name="publisher" ><br><br>

<input type="submit" name="submit" value="Submit"><br><br>

<h4>Search Book Details</h4>
<form name="searchForm" action="p18action.php" method="post">

<label for="tot">Enter Author Name</label>&nbsp;

<input type="text" name="auth" ><br><br>

<input type="submit" name="search" value="Search"><br><br>

</form>

<?php

// Connect to DB

$conn= mysqli_connect("localhost","root","","colleges");

if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}

echo "Connected successfully<br>";

if (isset($_POST['submit']))

{

    $bid = $_POST['bid'];
$name = $_POST['name'];

$author = $_POST['author'];

$edition = $_POST['edition'];

$publisher = $_POST['publisher'];

echo " ***BOOK DETAILS*** ".'<br>';

echo "Book ID: ".$bid.'<br>';
echo "Book Name: ".$name.'<br>';

echo "Author: ".$author.'<br>';

echo "Edition: ".$edition.'<br>';

echo "Publisher: ".$publisher.'<br>';

//Connecting to database and inserting the values

$sql="INSERT into book values('$bid','$name', '$author', $edition, '$publisher')";

if (mysqli_query($conn, $sql)) {

echo "<br>New record created successfully";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

}

//Connecting to database and Searching for tuples of given roll no

if(isset($_POST['search']))

{

$auth = $_POST['auth'];

$sql="select * from book where author='$auth'";

$res= mysqli_query($conn, $sql);

$totRows = mysqli_num_rows($res);

if($totRows==0)

{ echo "No records found!"; }

else {
    echo "<center><table><tr>";

echo "<th>Book ID</th><th>Title</th><th>Author</th><th>Edition</th><th>Publisher</th>";

echo "</tr><tr>";
}

while($row = mysqli_fetch_assoc($res))

{

    echo "<td>".$row["bid"]."</td>";
    echo "<td>".$row["name"]."</td>";
echo "<td>".$row["author"]."</td>";
echo "<td>".$row["edition"]."</td>";
echo "<td>".$row["publisher"]."</td>";

echo "</tr>";

}

echo "</table></center>";

}

mysqli_close($conn);

?>

</div>

</body>

</html>


