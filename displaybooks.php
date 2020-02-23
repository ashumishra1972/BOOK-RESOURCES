<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>DISPLAY BOOKS</h2></center>
<br>
<?php
include("dbconnection.php");
$search = $_REQUEST["search"];
$query = "select title,isbn,author,edition,publication,Description from book_info where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
{
?>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> title </th>
<th> isbn </th>
<th> author </th>
<th> edition </th>
<th> publication </th>
<th>Description</th>
</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["title"];?> </td>
<td><?php echo $row["isbn"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["edition"];?> </td>
<td><?php echo $row["publication"];?> </td>
<td><?php echo $row["Description"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>
</body>
</html>