// URL de ejemplo de la API de Waze para obtener datos de tráfico
var wazeAPIUrl = 'https://www.waze.com/row-rtserver/web/TGeoRSS?ma=600&mj=100&mu=1000&left=-91.0&right=-90.0&bottom=34.0&top=35.0&_=1521423429017';

// Hacer la petición a la API de Waze
fetch(wazeAPIUrl)
    .then(function (response) {
        // Verificar si la respuesta es correcta
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        // Parsear la respuesta JSON
        return response.json();
    })
    .then(function (data) {
        // Hacer algo con los datos obtenidos
        console.log(data);
    })
    .catch(function (error) {
        // Manejar errores de conexión o de la API
        console.error('There has been a problem with your fetch operation:', error);
    });