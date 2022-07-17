<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vehiculo extends CI_Controller {
	public function index()
	{
		$this->load->view('vehiculo');
	}
	public function ingresar()
	{
		$this->load->model('m_vehiculo');
		$patente = $this->input->post('patente');
		$marca = $this->input->post('marca');
		$modelo = $this->input->post('modelo');
		$color = $this->input->post('color');
		$this->vehiculo_model->ingresar($patente, $marca, $modelo, $color);
		$this->load->view('vehiculo');
	}
}