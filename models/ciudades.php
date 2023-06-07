<?php
require_once "connection/connection.php";

class Municipio
{

    public function obtener_municipios_select($id_departamento)
    {
        $db = new Connection();
        $query = "SELECT id_municipio, municipio FROM municipios WHERE departamento_id = $id_departamento";
        $resultado = $db->query($query);
        $datos = [];
        if ($resultado->num_rows) {
            while ($row = $resultado->fetch_assoc()) {
                $datos[] = [
                    'id_municipio' => $row['id_municipio'],
                    'municipio' => $row['municipio'],
                ];
            } //end while
        } //end if
        return $datos;
    } //end obtener_municipios_select

}//end class Municipio