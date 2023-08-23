<?php

include("conn.php");

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $query = "DELETE FROM alumnos WHERE alu_id = '$id'";
//     $res = mysqli_query($conn, $query);
//     if (!$res) {
//         die("error");
//     }

//     $_SESSION['message'] = "Eliminado correctamente";
//     $_SESSION['message_type'] = 'danger';
//     header('Location: ../pages/index.php');
// }



?>

<?php
include('conn.php');
$id = $_REQUEST['id'];

$query = ("DELETE FROM alumnos WHERE alu_id= '$id' ");
mysqli_query($conn, $query);
header('Location: ../pages/index.php');

$_SESSION['message'] = "Eliminado correctamente";
$_SESSION['message_type'] = 'danger';
?>