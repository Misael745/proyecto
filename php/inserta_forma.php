<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST["f_nombre"]) ? $_POST["f_nombre"] : null;
    $edad = isset($_POST["f_edad"]) ? $_POST["f_edad"] : null;
    $genero = isset($_POST["f_genero"]) ? $_POST["f_genero"] : null;
    $ocupacion = isset($_POST["f_ocupacion"]) ? $_POST["f_ocupacion"] : null;
    $municipio = isset($_POST["f_municipio"]) ? $_POST["f_municipio"] : null;
    $localidad = isset($_POST["f_localidad"]) ? $_POST["f_localidad"] : null;
    $monto = isset($_POST["f_monto"]) ? $_POST["f_monto"] : null;
    $tipo = isset($_POST["f_tipo"]) ? $_POST["f_tipo"] : null;

    
    echo "$nombre-$edad-$genero-$ocupacion-$municipio-$localidad-$monto-$tipo";
}
?>
