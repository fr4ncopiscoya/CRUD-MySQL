<?php include("conn.php") ?>

<?php include("include/header.php") ?>

<?php include("include/navbar.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']  ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']  ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();
            } ?>

            <div class="card card-body">
                <h2>Registrar</h2>

                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text " name="nombre" class="form-control" placeholder="Nombre..." autofocus required>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="apellido" rows="5" class="form-control" placeholder="Apellido..." required>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="sexo" rows="5" class="form-control" placeholder="Sexo..." required>
                    </div>
                    <br>

                    <input type="submit" class="btn btn-success btn-block" name="save" value="Enviar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Sexo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM task";
                    $result_tasks = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                        <tr>
                            <td><?php echo $row['alu_id']; ?></td>
                            <td><?php echo $row['alu_nombre']; ?></td>
                            <td><?php echo $row['alu_apellido']; ?></td>
                            <td><?php echo $row['alu_sexo']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['alu_id'] ?>" class="btn btn-secondary">
                                    <img src="./svg/edit-2.svg" alt="">
                                </a>
                                <a href="delete.php?id=<?php echo $row['alu_id'] ?>" class="btn btn-danger">
                                    <img src="./svg/trash-2.svg" alt="">
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("include/footer.php") ?>