<!DOCTYPE HTML>
<html>
<body>
<?php
$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$cpassword = $_POST['cPassword'];
if($password==$cpassword){
$conn = new mysqli('localhost','root','','signup');
if($conn->connect_error){
die('connection failed'.$conn->connect_error);
}
else
{
$stmt = $conn->prepare("insert into info(username,email,password,cpassword) values(?,?,?,?)");
$stmt->bind_param("ssss",$username,$email,$password,$cpassword);
$stmt->execute();
echo "registration sucessfull";
$stmt->close();
$conn->close();
echo "You have Sucessfully SIGN UP. ";
header("location: login.html");

}
}
else{
echo "PASSWORD DOES NOT MATCH";
die();
}

?>
<a href="login.html">Click Here</a>
</body>
</html>