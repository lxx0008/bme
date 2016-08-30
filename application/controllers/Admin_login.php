<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {
	public function index($page = 'home')
	{
		$this->load->view('templates/admin_header');
		$this->load->view('admin/login');
	}
}
?>