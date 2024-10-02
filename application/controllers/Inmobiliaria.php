<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inmobiliaria extends CI_Controller {
	public function index()
	{
		
		$this->load->view('plantilla/head');
		$this->load->view('paginas/inicio');
		$this->load->view('plantilla/footer');
	}


}