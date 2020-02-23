<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>BOOKS Resources</h2></center>
<br>
 
<?php
include("dbconnection.php");
 
$title=$_POST["title"];
$isbn=$_POST["isbn"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
$description=$_POST["description"];
 
$query = "insert into book_info(title,isbn,author,edition,publication,description) values('$title','$isbn','$author','$edition','$publication','$description')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
 
?>
 
<h3> Book information is inserted successfully </h3>
 
<a href="searchbooks3.html"> To search for the Book information click here </a>
 
</body>
</html>