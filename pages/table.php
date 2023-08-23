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
        <tbody id="tablita">
            <?php
            $query = "SELECT * FROM alumnos";
            $result_tasks = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <tr>
                    <td><?php echo $row['alu_id']; ?></td>
                    <td><?php echo $row['alu_nombre']; ?></td>
                    <td><?php echo $row['alu_apellido']; ?></td>
                    <td><?php echo $row['alu_sexo']; ?></td>
                    <td>

                        <button typae="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['alu_id']; ?>" data-bs-whatever="@getbootstrap"><img src="../svg/edit-2.svg" alt=""></button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $row['alu_id']; ?>" data-bs-whatever="@getbootstrap"><img src="../svg/trash-2.svg" alt=""></button>
                    </td>
                </tr>

                <?php include("modal-edit.php"); ?>

                <?php include("modal-delete.php"); ?>

            <?php } ?>


        </tbody>
    </table>
</div>