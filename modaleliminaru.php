
<div class="modal fade" id="modaleliminaru<?php echo $usuario['id_usu'];?>" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <div class="row">
                <div class="col">
                      <h5 class="modal-title" id="exampleModalLabel"><center>¿Estas seguro? <br>Se eliminará a:<br><br> <?php echo $usuarios['nombre'];?><br></center></h5>                    
                    </div>
                <div class="col">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
            </div>
        </div>
        <div class="modal-body"><center>Selecciona "Eliminar" para borrarlo(a) de la base de datos.</center></div>
        <div class="modal-footer">
<form method="post" action="eliminau.php">
<input type="hidden" name="documento" id="documento" value="<?php echo $usuario['id_usu'];?>">
        <input type="submit" class="btn btn-danger" value="Eliminar">
</form>
        </div>
    </div>
</div>
</div>