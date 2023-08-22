<?php

include("./conn.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE alu_id = '$id'";
    $res = mysqli_query($conn, $query);
    if (!$res) {
        die("Could not delete");
    }

    $_SESSION['message'] = "Task deleted successfully";
    $_SESSION['message_type'] = 'danger';
    header('Location: index.php');
}
