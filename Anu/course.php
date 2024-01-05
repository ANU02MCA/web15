<?php
    $conn=mysqli_connect("localhost","root","","college")
?>
<html>
<head>
    <title>Document</title>
</head>

<body>
    <form>
        Rollno <input type="text" name="rollno"><br><br>
        Name <input type="text" name="name"><br><br>
        Marks <input type="text" name="marks"><br><br>
        Grade <input type="text" name="grade"><br><br>
        <input type="submit" value="submit" name="submit">
        <input type="submit" value="update" name="update">
        <input type="submit" value="delete" name="delete">
        <input type="submit" value="search" name="search">
    </form>
</body>

</html>
<?php
    if(isset($_REQUEST["submit"]))
    {
        $rollno=$_REQUEST["rollno"];
        $name=$_REQUEST["name"];
        $marks=$_REQUEST["marks"];
        $grade=$_REQUEST["grade"];
        $query="insert into student values( '$rollno','$name','$marks','$grade')";
        $run=mysqli_query($conn,$query);
        if($run){
            echo"Successfully Inserted";
        }
        else{
            echo"failed";
        }
    }
?>
