// Crear una función para hacer la petición AJAX
function fetchData() {
    // Crear un objeto XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurar la solicitud
    xhr.open('GET', 'https://lobohackathon.castelancarpinteyro.com/repo/php%20scripts/api-testing.php', true);

    // Configurar el manejo de la respuesta
    xhr.onload = function () {
        // Verificar si la solicitud se completó correctamente
        if (xhr.status >= 200 && xhr.status < 300) {
            // Parsear la respuesta JSON
            var responseData = JSON.parse(xhr.responseText);
            // Hacer algo con los datos
            console.log(responseData);
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

// Llamar a la función para hacer la petición AJAX
//fetchData();
function log_cars(data) {
    data = JSON.parse(data);
    console.log("Hay " + data[0].cars_quantity_semaphore + " autos en la calle.");
}
// Call the updateGoals function every 5 seconds
setInterval(log_cars(fetchData()), 5000);