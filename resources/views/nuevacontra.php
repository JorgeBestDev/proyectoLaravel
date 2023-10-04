<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/materialize.js"></script>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Document</title>
</head>
<body>
    <br>
    <div class="container col-8 col-s8">
        <form style="width:75%; height: auto;">
            <div class="divformulario">
                <div class="ImagenMain">
                    <a href="index.php">
                        <img id="imgmain" src="../img/images.png" alt="not found">
                    </a>
                </div>
                <div>
                    <h5 id="aprendices">
                        Ingrese su nueva Contraseña
                    </h5>
                    <br>
                </div>
                <div class="input-field">
                    <input class="validate" type="password">
                    <label class="labelidpass">
                        Nueva Contraseña
                    </label>
                    <span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span>
                </div>
                <div class="input-field">
                    <input class="validate" type="password">
                    <label class="labelidpass">
                        Confirme su Contrasaña
                    </label>
                    <span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span>
                </div>
                <br>
                <div class="divbotones">
                    <div>
                        <a href="#idModalEntrada" class="btn modal-trigger">
                            Enviar
                        </a>
                        <div id="idModalEntrada" class="modal">
                            <div class="modal-content">
                                <h4>
                                    Contraseña Reestablecida
                                </h4>
                                <p>
                                    Regresando a el login
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="index.php" class="btn modal-close">Cerrar</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            $('.modal').modal();
        });
    </script>
</body>
</html>