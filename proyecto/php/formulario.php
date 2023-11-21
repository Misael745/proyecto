<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="/proyecto/css/estiloencuesta.css">
    <script src="/proyecto/js/validacionesform.js"></script>
    <title>Registro de habitantes</title>
</head>
<body>
    <div class='container'>    
            <h1>Formulario para registro de habitantes</h1>
            <p>Todos los campos son obligatorios</p>
<form id="forma" action="inserta_forma.php" method="post" onsubmit="return valida_forma()">
            <div id='row'>  
                <div id='col-25'>
                    <label id="lbl">Nombre</label>
                </div>
                <div id='col-75'>
                    <input type="text" id="f_nombre" name="f_nombre" placeholder="Ingrese nombre">
                </div>
            </div>

            <div id='row'>  
                <div id='col-25'>
                    <label id="lbl">Edad</label>
                </div>
                <div id='col-75'>
                    <input class="mayusculas" type="text" id="f_edad" name="f_edad" placeholder="Ingrese edad">
                </div>
            </div>

            <div id='row'>
                <div id='col-25'>
                    <label id="lbl">Genero</label>
                </div>
                <div id='col-75'>
                    <select name="f_genero" id="f_genero">
                        <option value="0">Seleccione:</option>
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                        <option value="3">Otro</option>
                    </select>
                </div>
            </div>

            <div id='row'>  
                <div id='col-25'>
                    <label id="lbl">Ocupacion</label>
                </div>
                <div id='col-75'>
                    <input type="text" id="f_ocupacion" name="f_ocupacion" placeholder="Ingrese ocupacion">
                </div>
            </div>

            <div id='row'>
                <div id='col-25'>
                    <label id="lbl">Municipio</label>
                </div>
                <div id='col-75'>
                    <select name="f_municipio" id="f_municipio">
                        <option value="0">Seleccione:</option>
                        <option value="1">Abasolo</option>
                        <option value="2">Acuña</option>
                        <option value="3">Allende</option>
                        <option value="4">Arteaga</option>
                        <option value="5">Candela</option>
                        <option value="6">Castaños</option>
                        <option value="7">Cuatro Ciénegas</option>
                        <option value="8">Escobedo</option>
                        <option value="9">Saltillo</option>
                        <option value="10">Frontera</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                       
                    </select>
                </div>
            </div>

            <div id='row'>  
                <div id='col-25'>
                    <label id="lbl">Localidad</label>
                </div>
                <div id='col-75'>
                    <input type="text" id="f_localidad" name="f_localidad" placeholder="Ingrese localidad">
                </div>
            </div>

            <div id='row'>  
                <div id='col-25'>
                    <label id="lbl">Monto</label>
                </div>
                <div id='col-75'>
                    <input type="text" id="f_monto" name="f_monto" placeholder="Ingrese monto">
                </div>
            </div>

            <div id='row'>
                <div id='col-25'>
                    <label id="lbl">Tipo</label>
                </div>
                <div id='col-75'>
                    <select name="f_tipo" id="f_tipo">
                        <option value="0">Seleccione:</option>
                        <option value="1">Vivienda de concreto</option>
                        <option value="2">Vivienda de adobe(antiguo)</option>
                        <option value="3">Vivienda de ladrillo</option>
                        <option value="4">Vivienda de madera</option>
                        <option value="5">Vivienda de carton</option>
                        <option value="6">Vivienda de piedra</option>
                        <option value="7">Vivienda prefabricada</option>
                        <option value="8">Material ecologico</option>
                        <option value="9">Casa de paja, ramas o caña</option>
                        <option value="10">Material adobe moderno</option>
                        
                    </select>
                </div>
            </div>

            <div class='row2'>
                <input type="submit" class="boton" id="f_registrar" value="Registrar">
            </div>
        </form>
    </div> <!-- end container -->
</body>
</html>
