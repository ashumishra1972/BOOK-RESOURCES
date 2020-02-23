<!DOCTYPE HTML>
<html>
<body>
<?php 
 include_once("database.php"); 
 session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
 if (empty($_POST['Username']) || empty($_POST['Password'])) 
 $Username = $_POST["Username"]; 
 $Password = $_POST["Password"]; 
 $stmt= $db->prepare("SELECT username, password FROM info WHERE username = ?");
 $stmt->bind_param("s",$Username);
 $stmt->execute();
 $stmt->bind_result($UsernameDB, $PasswordDB);
 if ($stmt->fetch() && password_verify($Password, $PasswordDB)) 
 {
 $_SESSION['Username']=$Username; 
 header("location: menu1.html");
 }
 else
 {
    echo "<b>Incorrect username or password</b>"; 
   ?>
 
   <a href="Login.html">Login</a>
       <?php 
 } 
 } 
       ?>
 </body> 
 </html>