<?php
defined('BASEPATH') or exit('No direct script access allowed');

class vehiculo extends CI_Controller
{
	public function insert()
	{
		$data['patente'] = '';
		$data['marca'] = '';
		$data['modelo'] = '';
		$data['color'] = '';
		$this->load->view('ingresar_vehiculo', $data);
	}
	public function ingresar()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('patente', 'Patente', 'required|regex_match[/^[A-Z]+[-][0-9]+$/]', array('required' => 'Debe ingresar la patente', 'regex_match' => 'La patente debe cumplir formato [ABC-123]'));
		$this->form_validation->set_rules('marca', 'Marca', 'required', array('required' => 'Debe ingresar la marca'));
		$this->form_validation->set_rules('modelo', 'Modelo', 'required', array('required' => 'Debe ingresar el modelo'));
		$this->form_validation->set_rules('color', 'Color', 'required', array('required' => 'Debe ingresar el color'));


		if ($this->form_validation->run() == FALSE) {

			$data['patente'] = $this->input->post('patente');
			$data['marca'] = $this->input->post('marca');
			$data['modelo'] = $this->input->post('modelo');
			$data['color'] = $this->input->post('color');

			$this->load->view('ingresar_vehiculo', $data);
		} else {
			$this->load->model('m_vehiculo');


			$data['patente'] = $this->input->post('patente');
			$data['marca'] = $this->input->post('marca');
			$data['modelo'] = $this->input->post('modelo');
			$data['color'] = $this->input->post('color');


			$this->m_vehiculo->ingresar($data);


			$this->load->view('formsuccess');
		}
	}
	public function getAll()
	{
		$this->load->model('m_vehiculo');
		$data['vehiculos'] = $this->m_vehiculo->getAll();
		$this->load->view('ver_vehiculos', $data);
	}
}
