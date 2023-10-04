<div style="display: flex;justify-content: center;">
    <button href="#idModalRegistro" class="btn modal-trigger" type="sumbit" name="fEnviar" value="Ingresar">
        Registrar
    </button>
    <div id="idModalRegistro" class="modal">
        <div class="modal-content">
            <h4>
                Registrado correctamente
            </h4>
            <p>
                Usuario registrado correctamente, volviendo al login
            </p>
        </div>
        <div class="modal-footer">
            <button href="index.php" class="btn modal-close" type="submit" name="fEnviar"
                value="Ingresar">Cerrar</button>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
</script>
