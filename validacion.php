<?php

// DECLARAR VARIABLES
$nombre = "";
$contraseña = "";
$campos = "";
$pais = "";
$nivel = "";
$lenguajes = [];
// ASIGNAR VALOR SOLICITUD POST

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $pais = $_POST['pais'];
    $campos = array();
    if (isset($_POST['nivel'])) {
        $nivel = $_POST['nivel'];
    } else {
        $nivel = "";
    }


    if (isset($_POST['lenguajes'])) {
        $lenguajes = $_POST["lenguajes"];
    } else {
        $lenguajes = [];
    }
    if ($nombre == "") {
        array_push($campos, "El campo nombre no puede estar vacio");
    }
    if ($contraseña == "" or $contraseña == strlen($contraseña <= 6)) {
        array_push($campos, "La longitud de la contraseña es muy corta!");
    }
    if ($pais == "") {
        array_push($campos, "Selecciona un pais");
    }
    if ($nivel == "") {
        array_push($campos, "escoje nivel");
    }

    // VALIDACION SI EL CAMPO ESTA VACIO
    if ($lenguajes == ""  or count($lenguajes) < 2) {
        array_push($campos, "selecciona como minimo 2 lenguajes");
    }
    if (count($campos) > 0) {
        echo "<div style='color:red;'>";
        foreach ($campos as $campos_error) {
            echo "<h3> $campos_error </h3>";
        }
    } else {

        echo "<h3 style='color:green;'>Los campos correctos </h3>";
    }
}