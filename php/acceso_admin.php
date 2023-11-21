<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="/proyecto/css/estiloadmin.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/proyecto/js/verificasesion.js"></script>
    <script src="/proyecto/js/verpassword.js"></script>
    <title>Iniciar Sesión como Administrador</title>
</head>
<body>
    <div class='container'>
        <h1>Iniciar Sesión como Administrador</h1>
        <form action="validacion.php" method="post" >
            <div class='row'>
                <div class='col-25'>
                    <label for="usuario">Usuario:</label>
                </div>
                <div class='col-75'>
                    <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
                </div>
            </div>

            <div class='row'>
                <div class='col-25'>
                    <label for="contrasena">Contraseña:</label>
                </div>
                <div class='col-75'>
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
                    <input type="checkbox" id="showPassword"> Mostrar Contraseña
                </div>
            </div>

            <div class='row2'>
                <input type="hidden" name="accion" value="iniciar_sesion">
                <input type="submit" class="boton" value="Iniciar Sesión">
            </div>
        </form>
        <div id="mensaje-error" style="color: red;"></div>

    </div>
</body>
</html>
