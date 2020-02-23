<!DOCTYPE HTML>
<html>
<body>
<?php 
 include_once("database.php"); 
 session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
 if (empty($_POST['Username']) || empty($_POST['Password'])) 
 { 
 echo "Iusername or password";
 header("location: Login.html");
 } 
 $Username = $_POST["Username"]; 
 $Password = $_POST["Password"]; 
 $stmt= $db->prepare("SELECT username, password FROM info WHERE USERNAME = ?");
 $stmt->bind_param("s",$Username);
 $stmt->execute();
 $stmt->bind_result($UsernameDB, $PasswordDB);
 if ($stmt->fetch() && password_verify($Password, $PasswordDB)==0) 
 {
 $_SESSION['Username']=$Username; 
 header("location: mainmenu.html");
 }
 else
 {
    echo "Incorrect username or password"; 
   ?>
 
   <a href="Login.html">Login</a>
       <?php 
 } 
 } 
       ?>
 </body> 
 </html>