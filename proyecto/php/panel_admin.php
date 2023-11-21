<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="/proyecto/css/estilopanel.css">
    <title>Panel de Administrador</title>
</head>
<body>
    <?php
    // Iniciar la sesión
    session_start();

    // Verificar si la sesión está iniciada
    if(isset($_SESSION['id_usuario'])) {
    ?>
        <header>
            <h1>Bienvenido al Panel de Administrador</h1>
        </header>
        
           
    <nav>
        <a href="formulario.php">Agregar Datos</a>
        <a href="formulario_borrar.php">Borrar Datos</a>
        <a href="formulario_actualizar.php">Actualizar Datos</a>
        <a href="ver_info.php">Ver Información</a>
        <a href="/proyecto/conexion/cerrar_sesion.php">Cerrar Sesión</a>
    </nav>

      
        <section>
            <p>Este es tu contenido protegido.</p>
           
        </section>
    <?php
    } else {
        
        header("Location: acceso_admin.php");
        exit();
    }
    ?>
</body>
</html>
