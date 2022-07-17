<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_vehiculo extends CI_Model
{
    public function ingresar($patente, $marca, $modelo, $color)
    {
        $this->db->insert('vehiculo', array(
            'patente' => $patente,
            'marca' => $marca,
            'modelo' => $modelo,
            'color' => $color
        ));
    }
}
