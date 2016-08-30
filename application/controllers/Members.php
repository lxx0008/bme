<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('members_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
        $data['members'] = $this->members_model->get_data();
        
		$this->load->view('templates/header');
		$this->load->view('members',$data);
		$this->load->view('templates/footer');
	}
}
?>