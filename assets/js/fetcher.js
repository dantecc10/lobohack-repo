// Crear una función para hacer la petición AJAX
function fetchData(callback) {
    // Crear un objeto XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurar la solicitud
    xhr.open('GET', 'https://lobohackathon.castelancarpinteyro.com/php%20scripts/api-testing.php', true);

    // Configurar el manejo de la respuesta
    xhr.onload = function () {
        // Verificar si la solicitud se completó correctamente
        if (xhr.status >= 200 && xhr.status < 300) {
            // Parsear la respuesta JSON
            var responseData = JSON.parse(xhr.responseText);
            // Llamar al callback con los datos obtenidos
            callback(responseData);
        } else {
            // Manejar errores
            console.error('Error al hacer la solicitud:', xhr.statusText);
        }
    };

    // Manejar errores de conexión
    xhr.onerror = function () {
        console.error('Error de conexión.');
    };

    // Enviar la solicitud
    xhr.send();
}

// Función para registrar la cantidad de autos
function log_cars(data) {
    console.log("Hay " + data[0].cars_quantity_semaphore + " autos en la calle.");
}

// Llamar a la función fetchData y pasar log_cars como callback
setInterval(function() {
    fetchData(log_cars);
}, 5000); // 5000 milisegundos (5 segundos)
