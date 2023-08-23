<!--Inicio ventana para Update--->
<div class="modal fade" id="edit<?php echo $row['alu_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualiza tus datos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="container p-12">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="card card-body">
                                <form method="POST" action="../include/edit.php">
                                    <input type="hidden" name="id" value="<?php echo $row['alu_id']; ?>">
                                    <div class="form-group">
                                        <input name="nombre" type="text" class="form-control" value="<?php echo $row['alu_nombre']; ?>">
                                    </div>
                                    <br>
                                    <div class=" form-group">
                                        <input name="apellido" type="text" class="form-control" value="<?php echo $row['alu_apellido']; ?>">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input name="sexo" type="text" class="form-control" value="<?php echo $row['alu_sexo']; ?>">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="update">
                                        Actualizar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!---Fin ventana Update --->