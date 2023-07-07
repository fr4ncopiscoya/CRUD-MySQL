<?php
include ("conexion.php");

if (isset($_POST['save_task'])) {
   $title =  $_POST['title'];
   $desciption = $_POST['desciption'];

   $query = "INSERT INTO task (tsk_title, tsk_description) VALUES ('$title','$desciption')";

   $res = mysqli_query($con, $query);

   if(!$res){
    die("Query failed");
   }

   $_SESSION['message'] ="Task saved successfully";
   $_SESSION['message_type'] = 'success';

   header("Location:index.php");
}

?>