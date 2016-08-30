<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Researchs extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('researchs');
		$this->load->view('templates/footer');
	}
}
?>