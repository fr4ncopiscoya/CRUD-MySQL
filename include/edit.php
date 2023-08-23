<?php
include("conn.php");
$nombre =  '';
$apellido = '';
$sexo = '';

if (isset($_POST['update'])) {
    $id = $_REQUEST['id'];
    $nombre =  $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];

    echo $nombre;
    echo $apellido;
    echo $sexo;

    $query = "UPDATE alumnos set alu_nombre = '$nombre', alu_apellido = '$apellido', alu_sexo = '$sexo' WHERE alu_id='$id'";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
}
header('Location: ../pages/index.php');
