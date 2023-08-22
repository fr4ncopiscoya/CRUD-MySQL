<?php
include("conn.php");

if (isset($_POST['save'])) {
   $nombre =  $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $sexo = $_POST['sexo'];

   $query = "INSERT INTO task (alu_nombre, alu_apellido, alu_sexo ) VALUES ('$nombre','$apellido', '$sexo')";

   $res = mysqli_query($conn, $query);

   if (!$res) {
      die("Query failed");
   }

   $_SESSION['message'] = "Task saved successfully";
   $_SESSION['message_type'] = 'success';

   header("Location:index.php");
}
