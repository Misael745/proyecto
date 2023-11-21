$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'validacion.php',
            data: formData,
            success: function(response) {
                // Verificar si la respuesta es "Inicio de sesión exitoso"
                if (response.trim() === "Inicio de sesión exitoso") {
                    window.location.replace('panel_admin.php');
                } else {
                    // Muestra el mensaje de error al usuario
                    $('#mensaje-error').text("Contraseña y/o usuario incorrecto");
                }
            },
            error: function(xhr, status, error) {
                // Manejar errores de red u otros problemas
                $('#mensaje-error').text("Error en la solicitud AJAX. Verifica tu conexión o intenta más tarde.");
                console.error(xhr.responseText);
            }
        });
    });
});
