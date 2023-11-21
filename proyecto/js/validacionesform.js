// Arrow Function para validar el formulario
let valida_forma = () => {

    let js_edad = getTextInputByID("f_edad");
    let js_genero = getSelectValueByID("f_genero");
    let js_ocupacion = getTextInputByID("f_ocupacion");
    let js_municipio = getSelectValueByID("f_municipio");
    let js_localidad = getTextInputByID("f_localidad");
    let js_monto = getTextInputByID("f_monto");
    let js_tipo = getSelectValueByID("f_tipo");

    // Validación para el nombre
    if (js_nom.length === 0) {
        alert("Error: El nombre es obligatorio");
        return false;
    }

    // Validación para la edad (debe ser un número menor o igual a 100)
    if (js_edad.length === 0 || isNaN(js_edad) || js_edad <= 0 || js_edad > 100) {
        alert("Error: Ingresa una edad válida (menor o igual a 100).");
        return false;
    }

    // Validación para el género
    if (js_genero === '0') {
        alert("Error: Selecciona un género");
        return false;
    }

    // Validación para la ocupación (menor o igual a 20 caracteres)
    if (js_ocupacion.length === 0 || js_ocupacion.length > 20) {
        alert("Error: Ingresa una ocupación válida (máximo 20 caracteres).");
        return false;
    }

    // Validación para el municipio
    if (js_municipio === '0') {
        alert("Error: Selecciona un municipio");
        return false;
    }

   
    if (js_localidad.length === 0) {
        alert("Error: La localidad es obligatoria");
        return false;
    }

   
    if (js_monto.length === 0 || isNaN(js_monto) || js_monto <= 0) {
        alert("Error: Ingresa un monto válido (mayor a 0).");
        return false;
    }

    
    if (js_tipo === '0') {
        alert("Error: Selecciona un tipo");
        return false;
    }

    
    alert("Formulario válido. Puedes enviar la información.");
    return true;
};


let getTextInputByID = (id) => {
    return document.getElementById(id).value.trim();
};

let getSelectValueByID = (id) => {
    return document.getElementById(id).value;
};
