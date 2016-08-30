<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publications extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('publications_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data["publications"] = $this->publications_model->get_data(); 
		$this->load->view('templates/header');
		$this->load->view('publications',$data);
		$this->load->view('templates/footer');
	}
}
?>