<?php
require_once "models/deparamentos.php";
$tabla_estado = new Estado();
$estados = $tabla_estado->obtener_estados_select();