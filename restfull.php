<?php

function genjson($table, $selected) {
    if (isset($selected)) {
        $selected = $selected;
    } else {
        $selected = "*";
    }

    include './conection.php';

// Seleccionamos los registros
    $results = $conn->query("SELECT " . $selected . " FROM $table");

// Creamos el array postres
    $rows['client'] = array();

// Recorremos los registros de la Base de Datos para mostrarlos
    while ($r = $results->fetch_object()) {
        array_push($rows['client'], $r);
    }

// Con solo json_encode imprimimos los registros, pero le agregamos JSON_PRETTY_PRINT para mostrar el array mas ordenado en pantalla
    $mysql_json = json_encode($rows, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

// Con las etiquetas <pre></pre> damos saltos de linea a nuestro array
    echo $mysql_json;
}

genjson("client", "*");
