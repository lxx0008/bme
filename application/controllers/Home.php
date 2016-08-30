<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->model('publications_model');
		// $this->load->model('news_model');
		$this->load->helper('url_helper');
	}
	public function index($page = 'home')
	{
		$data['url'] = site_url("lab");
		$this->load->view('templates/header');
		$this->load->view('home',$data);
		$this->load->view('templates/footer');
	}
}
?>