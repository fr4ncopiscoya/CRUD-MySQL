<!-- Ventana modal para eliminar -->
<div class="modal fade" id="delete<?php echo $row['alu_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    ¿Realmente deseas eliminar este usuario?
                </h4>
            </div>
            <form action="../include/delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['alu_id']; ?>">
                <div class="modal-body">
                    <strong style="text-align: center !important">
                        <?php echo $row['alu_id']; ?>
                        <?php echo $row['alu_nombre']; ?>
                        <?php echo $row['alu_apellido']; ?>

                    </strong>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" id="<?php echo $row['alu_id']; ?>">Eliminar</button>
                </div>
            </form>


        </div>
    </div>
</div>
<!---fin ventana eliminar--->