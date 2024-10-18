<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inmobiliaria extends CI_Controller {
	public function index()
	{
		
		$this->load->view('plantilla/head');
		$this->load->view('paginas/inicio');
		$this->load->view('plantilla/footer');
	}

	public function propiedad()
	{
		
		$this->load->view('plantilla/head');
		$this->load->view('paginas/propiedad');
		$this->load->view('plantilla/footer');
	}

	public function contacto()
	{
		$this->load->view('plantilla/head');
		$this->load->view('paginas/contacto');
		$this->load->view('plantilla/footer');
	}

	public function filtro()
	{
		$this->load->view('plantilla/head');
		$this->load->view('paginas/filtro');
		$this->load->view('plantilla/footer');
	}

}