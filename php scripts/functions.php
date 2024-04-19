<?php
function contains_string($main_string, $substring)
{
    // strpos devuelve la posición donde se encuentra la subcadena
    // Si no se encuentra, devuelve false
    return strpos($main_string, $substring) !== false;
}
function split_urls($urls)
{
    if (contains_string($urls, ", ")) {
        $img_urls = array();
        $img_urls = explode(", ", $urls);
    } else {
        $img_urls = $urls;
    }
    return $img_urls; // Usar como $data = split_urls($cadena_con_urls); (Validar con length)
}
function splitter($urls, $divisor)
{
    $strings_array = array();
    $strings_array = explode($divisor, $urls);
    return $strings_array; // Usar como $data = split_urls($cadena_con_urls); (Validar con length)
}
/* Validación de array
if (is_array(split_urls($urls))) {
    $img = (split_urls($urls))[0];
} else {
    $img = split_urls($urls);
}
*/
function build_table_dom($table, $data, $fields)
{
    switch ($table) {
        case 'juguetes':
            break;

        default:
            # code...
            break;
    }
}
function build_detail_carousel($imgs)
{
    $carousel = '';
    $n = sizeof($imgs);

    $carousel_capusule1 = '<div id="carousel-1" class="carousel slide" data-bs-ride="carousel">';
    $carousel_capusule2 = '</div>';

    $carousel_elements = '<div class="carousel-inner">';
    $carousel_indexes = '<ol class="carousel-indicators">';

    $carousel_buttons = '<div>
    <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>';

    for ($i = 0; $i < $n; $i++) {
        $element = '<div class="carousel-item">';
        $index = '<li data-bs-target="#carousel-1" data-bs-slide-to="';

        if ($i == 0) {
            // Añadir clases active al primer elemento e índice
            $element = str_replace('">', ' active">', $element);
            $index = str_replace('<li ', '<li class="active" ', $index);
        }

        $element .= ('<img class="w-100 d-block" src="' . ($imgs[$i]) . '" alt="Imagen ' . ($i + 1) . '" />');
        $index .= $i;

        $element .= '</div>';
        $index .= '"></li>';

        $carousel_elements .= $element;
        $carousel_indexes .= $index;
    }

    $carousel_elements .= '</div>';
    $carousel_indexes .= '</ol>';
    $carousel .= ($carousel_capusule1 . $carousel_elements . $carousel_buttons . $carousel_indexes . $carousel_capusule2);
    return $carousel;
    /*
        Invocación:
        build_detail_carousel($split_urls($data[$10])) // $data[10] es imgs de SQL
    */
}
function avatar_img($src)
{
    if ($src == "" || $src == null) {
        if (isset($_SESSION['id'])) {
            $final_src = $_SESSION['img'];
        } else {
            $final_src = "assets/img/avatars/avatar5.jpeg";
        }
    } else {
        $final_src = $src;
    }

    $avatar_img = ('<img class="border rounded-circle img-profile" src="' . $final_src . '">');
    return $avatar_img;
}

function fecha()
{
    $day = date('l');
    $month = date('m');
    $year = date('Y');
    switch ($day) {
        case "Monday":
            $str_day = "Lunes";
            break;
        case "Tuesday":
            $str_day = "Martes";
            break;
        case "Wednesday":
            $str_day = "Miercoles";
            break;
        case "Thursday":
            $str_day = " Jueves";
            break;
        case "Friday":
            $str_day = "Viernes";
            break;
        case "Saturday":
            $str_day = "Sábado";
            break;
        case "Sunday":
            $str_day = "Domingo";
            break;
    }

    $day = date('j');

    switch ($month) {
        case '01':
            $month = 'Enero';
            break;
        case '02':
            $month = 'Febrero';
            break;
        case '03':
            $month = 'Marzo';
            break;
        case '04':
            $month = 'Abril';
            break;
        case '05':
            $month = 'Mayo';
            break;
        case '06':
            $month = 'Junio';
            break;
        case '07':
            $month = 'Julio';
            break;
        case '08':
            $month = 'Agosto';
            break;
        case '09':
            $month = 'Septiembre';
            break;
        case '10':
            $month = 'Octubre';
            break;
        case '11':
            $month = 'Noviembre';
            break;
        case '12':
            $month = 'Diciembre';
            break;
    }

    $fecha = ($str_day . " " . $day . " de " . lcfirst($month) . " del " . $year);
    $hora = date('H:i:s');
    return ($fecha . " " . $hora);
}

function sql_insertion_get_id($data, $table)
{
    include "connection.php";
    if (($_SESSION['email'] == "demo_user@system.com") or ($_SESSION['user'] == "demo_user")) {
        $connection = new mysqli("localhost", "comercial_demo", $data[1], "comercial_demo");
    }
    // Realizar la inserción en la base de datos
    // INSERT INTO `transacciones` VALUES('', ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP);
    $sql = ("INSERT INTO `" . $table . "` VALUES ('', ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sisdsi", $data[0], $data[1], $data[2], $data[3], $data[4], $data[5]);
    $stmt->execute();

    // Obtener el ID de la última inserción con conexión de tipo PDO mysqli
    $id_transaction = $connection->insert_id;
    return $id_transaction;
}

function sql_transaction_insert($params, $table)
{
    include_once "credentials.php";
    $data = generatePasskey('sql'); // No es un bug, es una feature, je, je
    if (($_SESSION['email'] == "demo_user@system.com") or ($_SESSION['user'] == "demo_user")) {
        $connection = new mysqli("localhost", "comercial_demo", $data[1], "comercial_demo");
    } else {
        $connection = new mysqli("localhost", $data[0], $data[1], $data[2]);
    }
    if ($connection->connect_error) {
        die("La conexión a la base de datos falló: " . $connection->connect_error);
    } else {
        #echo ("Conexión establecida"); # Confirmación de conexión
    }
    // Consulta para la inserción
    // INSERT INTO `transacciones` VALUES('', 'Physical', 1, 'juguetes', 671.00, 'sale', 1, CURRENT_TIMESTAMP);
    $channel = strval($params[0]);
    $quantity = intval($params[1]);
    $categories = strval($params[2]);
    $amount = floatval($params[3]);
    $type = strval($params[4]);
    $user = intval($params[5]);
    $sql = ("INSERT INTO `" . $table . "` VALUES ('', '" . $channel . "', " . $quantity . ", '" . $categories . "', " . $amount . ", '" . $type . "', " . $user . ", CURRENT_TIMESTAMP)");

    // Ejecutar la consulta
    if ($connection->query($sql) === TRUE) {
        $last_id = $connection->insert_id;
    } else {
        //echo "Error en la inserción: " . $conexion->error;
    }

    // Cerrar la conexión
    $connection->close();
    return $last_id;
}

function get_last_insert_id($connection)
{
    return $connection->insert_id;
}

function import_env_configs()
{
    require_once '../vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable('/var/www/vhosts/castelancarpinteyro.com/comercial.castelancarpinteyro.com');
    return $dotenv;
    //$dotenv->load();
}
function sql_debug_fetcher($table, $fields, $custom_query)
{
    include_once "connection.php";
    $sql = ($custom_query != null && $custom_query != "") ? $custom_query : ("SELECT * FROM `" . $table . "`");

    //$sql = "SELECT * FROM `" . $table . "`";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();

    //for ($i = 0; $i < sizeof($data); $i++) {
    //    echo ('<tr>');
    //    for ($j = 0; $j < sizeof($fields); $j++) {
    //        echo ("<td>" . $data[$i][$fields[$j]] . "</td>");
    //    }
    //    echo ('</tr>');
    //}

    return [$data, $fields];
}

function debug_data_printer($info)
{
    $data = $info[0];
    $fields = $info[1];

    echo ('<table>');
    echo ('<thead>');
    echo ('<tr>');
    for ($i = 0; $i < sizeof($fields); $i++) {
        echo ("<th>" . $fields[$i] . "</th>");
    }
    echo ('</tr>');
    echo ('</thead>');
    echo ('<tbody>');
    for ($i = 0; $i < sizeof($data); $i++) {
        echo ('<tr>');
        for ($j = 0; $j < sizeof($fields); $j++) {
            echo ("<td>" . $data[$i][$fields[$j]] . "</td>");
        }
        echo ('</tr>');
    }
    echo ('</tbody>');
    echo ('</table>');
}

/*function get_day_name($date)
{
    $fecha = $date; #"2022-04-11"; // Ejemplo de fecha obtenida de la base de datos

    // Establecer el idioma local a español
    setlocale(LC_TIME, 'es_ES.UTF-8');

    // Convertir la fecha a un formato legible
    $formatted_date = date("Y-m-d", strtotime($date));

    // Obtener el nombre del día de la semana en español
    $weekday_name = strftime("%A", strtotime($date));

    #echo "La fecha $fecha_formateada cayó en un $nombre_dia_semana.";
    return $weekday_name;
}*/

function get_day_name($date)
{
    $fecha = $date; #"2022-04-11"; // Ejemplo de fecha obtenida de la base de datos

    // Convertir la fecha a un formato legible
    $formated_date = date("Y-m-d", strtotime($date));

    // Crear un formateador de fecha
    $formatter = new IntlDateFormatter('es_ES', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    $formatter->setPattern('EEEE');

    // Obtener el nombre del día de la semana en español
    $weekday_name = $formatter->format(new DateTime($date));

    return $weekday_name;
}

function generate_league_table()
{
    include "soccer_queries.php";
    $sql = $league_query;

    $data = fetch_fields('teams', $league_table_fields, '', $sql);

    /*echo ("<table>");
    echo ("<tr><thead>");
    //for ($i = 0; $i < sizeof($league_table_fields); $i++) { echo ("<th>" . $league_table_fields[$i] . "</th>"); }
    echo ('<th>Logo</th>');
    echo ('<th>Equipo</th>');
    echo ('<th>PJ</th>');
    echo ('<th>G</th>');
    echo ('<th>E</th>');
    echo ('<th>P</th>');
    echo ('<th>GF</th>');
    echo ('<th>GC</th>');
    echo ('<th>DG</th>');
    echo ('<th>Pts.</th>');
    echo ('<th></th>');*/

    echo (' <div class="table-responsive">
                <table class="table main-color rounded-5 custom-font">
                    <thead class="text-center main-bg-color">
                        <tr class="submain-bg-color">
                            <th class="submain-bg-color main-color px-0" style="background-color: var(--third-color) !important;">#</th>
                            <th class="col-3 submain-bg-color main-color" style="background-color: var(--third-color) !important;">Club</th>
                            <th class="submain-bg-color main-color px-1" style="background-color: var(--third-color) !important;">PJ</th>
                            <th class="submain-bg-color main-color px-1" style="background-color: var(--third-color) !important;">G</th>
                            <th class="submain-bg-color main-color px-1" style="background-color: var(--third-color) !important;">E</th>
                            <th class="submain-bg-color main-color px-1" style="background-color: var(--third-color) !important;">P</th>
                            <th class="d-none d-sm-table-cell submain-bg-color main-color px-1" style="background-color: var(--third-color) !important;">GF</th>
                            <th class="d-none d-sm-table-cell submain-bg-color main-color px-1" style="background-color: var(--third-color) !important;">GC</th>
                            <th class="submain-bg-color main-color px-1" style="background-color: var(--third-color) !important;">DG</th>
                            <th class="submain-bg-color main-color px-1" style="background-color: var(--third-color) !important;">Pts.</th>
                        </tr>
                    </thead>
                    <tbody class="text-center table-striped">');

    for ($i = 0; $i < sizeof($data); $i++) {
        echo ("<tr>");
        for ($j = 0; $j < sizeof($league_table_fields); $j++) {
            switch ($j) {
                case 0:
                    echo ('<td class="align-middle submain-bg-color main-color px-0" style="background-color: var(--third-color) !important;">' . ($i + 1) . '°</td>');
                    echo (' <td class="align-middle submain-bg-color" style="background-color: var(--third-color) !important;">
                                <div class="row">
                                    <div class="col col-12 col-md-3 py-1 px-0" style="max-height: 50px !important;"><a href="detail.php?team=' . $data[$i][($j + 1)] . '" style="/*max-height: inherit;*/"><img class="bs-icon-sm icon rounded-4" src="' . $data[$i][$j] . '" style="max-height: 40px;width: auto;"></a></div>
                                    <div class="col d-flex align-items-center col-12 col-md-9 px-1 ps-0"><span class="d-flex align-middle justify-content-center col-12 main-color">' . $data[$i][($j + 1)] . '</span></div>
                                </div>
                            </td>');
                    break;
                    //                case 6:
                    //echo ('<td class="align-middle submain-bg-color main-color" style="background-color: var(--third-color) !important;">' . $data[$i][$j] . '</td>');
                    //break;

                default:
                    if (($j >= 2 && $j <= 5) || ($j == 8 || $j == 9)) {
                        echo ('<td class="align-middle submain-bg-color main-color" style="background-color: var(--third-color) !important;">' . $data[$i][$j] . '</td>');
                    }
                    if ($j == 7 || $j == 6)
                        echo ('<td class="d-none d-sm-table-cell align-middle submain-bg-color main-color" style="background-color: var(--third-color) !important;">27</td>');
                    break;
            }
        }
        echo ("</tr>");
    }
    echo ("</tbody></table></div>");
}

function fetch_fields($table, $fields, $id, $custom_query)
{
    #$connection = new mysqli("localhost", "cuinos_fc", "CuinosFC24!!", "cuinos_fc");
    if (!include_once "connection.php") {
        include_once "php scripts/connection.php";
    }
    //session_start();
    //(($_SESSION['email'] == "demo_user@system.com") or ($_SESSION['user'] == "demo_user")) ? $connection = new mysqli("localhost", "comercial_demo", $data[1], ($table . "_demo")):(false);
    if ($custom_query != "" && $custom_query != null) {
        $query = $custom_query;
    } else {
        if ($id == "" or $id == null) {
            $query = "SELECT * FROM `$table`";
        } else {
            $query_field = ($fields[0]);
            $query = "SELECT * FROM `$table` WHERE `$query_field` = '$id'";
        }
    }

    $result = mysqli_query($connection, $query) or die("Error en la consulta a la base de datos");
    $data = array();

    // Comprobar si las filas son mayores que 0
    $result = $connection->query($query);
    // Verificar si se encontró un usuario válido
    if ($result->num_rows > 0) {
        if ((stripos($query, "UPDATE") === false) && (stripos($query, "INSERT") === false)) {
            $i = 0;
            // Hacer fetch a los datos
            while ($row = $result->fetch_array()) {
                // Procesar cada registro obtenido
                $n = sizeof($fields);
                for ($j = 0; $j < $n; $j++) {
                    ($id == "" or $id == null) ? $data[$i][$j] = $row[$fields[$j]] : $data[$j] = $row[$fields[$j]];
                }
                $i++;
            }
            return $data;
        }
    } else {
        // No hay registros en la tabla, o la consulta hizo una actualización: devolver null
        $connection->close();
        return null;
    }
}
function increment_traffic_count($id)
{
    $cars_query = "SELECT `vehicle_quantity_semaphore` FROM `semaphores` WHERE (`semaphore_id` = $id)";
    $connection = new mysqli("localhost", "lobohacker", "SQLTester23!!", "lobohack");

    $result = mysqli_query($connection, $cars_query) or die("Error en la consulta a la base de datos");
    $data = array();
    while ($row = $result->fetch_array()) {
        $data[] = $row;
    }
    (sizeof($data) === 0) ? $val = ($data[0]['vehicle_quantity_semaphore'] + 1) : $val = 0;

    $update_query = "UPDATE `semaphores` SET `vehicle_quantity_semaphore` = $val WHERE (`semaphore_id` = $id)";
    return ($connection->query($update_query)) ? true : false;
}
