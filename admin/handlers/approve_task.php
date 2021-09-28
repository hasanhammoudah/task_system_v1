<?php 
 session_start();
 include("../../handlers/connect.php");
 
$tid = $_GET['taskId'];
$sql = "UPDATE tasks SET status=1 where id=$tid";
if(mysqli_query($conn,$sql)){
    $_SESSION['success']="task updated succesfully";
    header("Location: ../showTasks.php");
}
?>