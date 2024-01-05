<DOCTYPE! html>

<html>

<head>

<style>
body{
  padding: 80px;
}
#regform{
background-color:teal;
border-style: double;
border-width: thick; 
text-align: center;
font-size: 20px;
align-items: center;
width: 500;
height:600;
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
<h3> Book Register</h3>

<form name="marksForm" action="p18action.php" method="post">

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

</div>

</body>

</html>
