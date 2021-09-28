<?php 
$sql = "SELECT tasks.id as taskId,title,body,tasks.status as taskStatus,users.id as userId,name,email  FROM tasks JOIN
users on users.id = tasks.user_id ";
$queryGetTasks = mysqli_query($conn,$sql);

?>