<?php session_start();
include("../../handlers/connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql ="SELECT * FROM admins where email='$email'";
$query = mysqli_query($conn,$sql);
$emailCount=mysqli_num_rows($query);
$adminData = mysqli_fetch_array($query);
if($emailCount > 0){
    
    if(password_verify($password,$adminData['password'])){
        $_SESSION['id']=$adminData['id'];

        header("location: add_admin.php");
        
    }else {
        $_SESSION['error']="invalid password";
        header("location: ../login.php");

    }
    
}else {
  $_SESSION['error']="invalid email";
  header("location: ../login.php");

}

?>