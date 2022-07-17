<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vehiculo extends CI_Controller {
	public function insert()
	{
		$this->load->view('ingresar_vehiculo');
	}
	public function ingresar()
	{
		$data['patente'] = $this->input->post('patente');
		$data['marca'] = $this->input->post('marca');
		$data['modelo'] = $this->input->post('modelo');
		$data['color'] = $this->input->post('color');
		$this->load->model('m_vehiculo');
		$this->m_vehiculo->ingresar($data);
		redirect('vehiculo');
	}
	public function getAll()
	{
		$this->load->model('m_vehiculo');
		$data['vehiculos'] = $this->m_vehiculo->getAll();
		$this->load->view('ver_vehiculos', $data);
	}
}