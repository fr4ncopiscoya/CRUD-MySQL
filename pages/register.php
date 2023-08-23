<div class="card card-body">
    <h3>Registrate</h3>
    <br>
    <form action="../include/save.php" method="POST">
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