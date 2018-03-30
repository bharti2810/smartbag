<?php
ob_start();
$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];

include 'dbh.php';
 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");
 
  $rows = mysqli_num_rows($query);
  echo "before block";
 if($rows == 1){
     echo "yes";
     header('Location: index.html');
     //exit();// Redirecting to other page
    }
 
 else
 {
 $error = "Username of Password is Invalid";
 }

}
}
?>