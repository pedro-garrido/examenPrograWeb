<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_vehiculo extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function ingresar($data)
    {
        $this->db->insert('vehiculo', $data);
    }
    public function getAll()
    {
        $query = $this->db->get('vehiculo');
        return $query->result();
    }
}
