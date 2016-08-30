<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lab extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('lab');
		$this->load->view('templates/footer');
	}
}
?>