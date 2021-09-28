<?php 
 session_start();
 include("../../handlers/connect.php");
 
$uid = $_GET['userId'];
$sql = "UPDATE users SET status=1 where id=$uid";
if(mysqli_query($conn,$sql)){
    $_SESSION['success']="user updated succesfully";
    header("Location: ../showUsers.php");
}
?>