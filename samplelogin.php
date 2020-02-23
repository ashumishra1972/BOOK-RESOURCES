<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['Username']) && !empty($_POST['Password'])) {  
    $user=$_POST['Username'];  
    $pass=$_POST['Password'];  
   $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con, 'signup') or die(mysqli_error($con));  
  
    $query=mysqli_query("SELECT * FROM info WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: member.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  