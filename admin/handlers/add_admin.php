<?php session_start();
include("../../handlers/connect.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$type = $_POST['type'];
 $password = password_hash($password,PASSWORD_DEFAULT);
 $sql="INSERT INTO admins(name,email,password,type) 
 VALUES('$name','$email','$password','$type')";
 if(mysqli_query($conn,$sql)){
    $_SESSION['success']='Add admin successfully';
    header("Location: ../addAdmin.php");
 }


?>