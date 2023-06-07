<?php
require_once "connection/connection.php";

class Estado
{

    public function obtener_estados_select()
    {
        $db = new Connection();
        $query = "SELECT id_departamento, departamento FROM departamentos";
        $resultado = $db->query($query);
        $datos = [];
        if ($resultado->num_rows) {
            while ($row = $resultado->fetch_assoc()) {
                $datos[] = [
                    'id_departamento' => $row['id_departamento'],
                    'departamento' => $row['departamento'],
                ];
            } //end while
        } //end if
        return $datos;
    } //end obtener_estados_select

}//end class Estado