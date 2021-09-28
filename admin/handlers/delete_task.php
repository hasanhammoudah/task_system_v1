<?php session_start();
include("../../handlers/connect.php");

$tid = $_GET['taskId'];

$sql = "DELETE from tasks where id=$tid";
if(mysqli_query($conn,$sql)){
    $_SESSION['success']="task deleted succesfully";
    header("Location: ../showTasks.php");
}
?>