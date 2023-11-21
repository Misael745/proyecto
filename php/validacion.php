<?php
// Archivo validacion.php

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accion']) && $_POST['accion'] == 'iniciar_sesion') {
    // Recoger los datos del formulario
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
    $contrasena = isset($_POST['password']) ? $_POST['password'] : null;

    // Incluir la clase de conexión
    include '../conexion/conexion.php';

    // Instanciar la clase Conexion
    $conexion = new Conexion("localhost", "root", "", "proyecto");

    // Verificar la conexión a la base de datos
    if ($conexion->getConexion()->connect_errno) {
        die("Conexión fallida: " . $conexion->getConexion()->connect_error);
    }

    // Consulta preparada para verificar las credenciales del usuario
    $stmt = $conexion->getConexion()->prepare("SELECT id FROM admins WHERE user = ? AND password = ?");
    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $stmt->store_result();

    // Verificar si se encontraron registros en la base de datos
    if ($stmt->num_rows > 0) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['id_usuario'] = $usuario;
        echo "Inicio de sesión exitoso";
    } else {
        // Usuario y/o contraseña incorrectos, mostrar un mensaje de error
        echo "Usuario y/o contraseña incorrectos";
    }

    // Cerrar la consulta preparada
    $stmt->close();

    // Cerrar la conexión a la base de datos
    $conexion->cerrarConexion();
}
?>
