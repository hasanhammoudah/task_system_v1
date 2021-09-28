<?php session_start();
include("../../handlers/connect.php");

$uid = $_GET['userid'];

$sql = "DELETE from users where id=$uid";
if(mysqli_query($conn,$sql)){
    $_SESSION['success']="user deleted succesfully";
    header("Location: ../showUsers.php");
}
?>