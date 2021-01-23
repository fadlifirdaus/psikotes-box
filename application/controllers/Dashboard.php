<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){

		// $data['user'] 	= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['userx'] = $this->session->user;
		$this->load->view('templates/header',$data);
		// $this->load->view('templates/header');
		$this->load->view('vdashboard');
		$this->load->view('templates/footer');
	}
} 