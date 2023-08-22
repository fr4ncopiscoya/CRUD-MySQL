<?php
include("conn.php");
$nombre =  '';
$apellido = '';
$sexo = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE alu_id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['alu_nombre'];
        $apellido = $row['alu_apellido'];
        $sexo = $row['alu_sexo'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre =  $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];

    echo $nombre;
    echo $apellido;
    echo $sexo;

    $query = "UPDATE task set alu_nombre = '$nombre', alu_apellido = '$apellido', alu_sexo = '$sexo' WHERE alu_id=$id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}

?>
<?php include('./include/header.php'); ?>
<?php include('./include/navbar.php'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                ACTUALIZA TUS DATOS
                <br>
                <br>
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>">
                    </div>
                    <br>
                    <div class=" form-group">
                        <input name="apellido" type="text" class="form-control" value="<?php echo $apellido; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <input name="sexo" type="text" class="form-control" value="<?php echo $sexo; ?>">
                    </div>
                    <br>
                    <button type="submit" class=" btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('./include/footer.php'); ?>