<?php

include("db.php");

if (isset($_POST['save_task'])) {
    $tittle = $_POST['tittle'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO task(title, description) VALUES('$tittle','$description')";
    $result =  mysqli_query($conn, $query);
   if (!$result) {
       die("query Failed");
   }

   $_SESSION['message'] = 'Task Saved Succesfully';
   $_SESSION['message_type'] = 'success';

   header("location: index.php");
}

?>