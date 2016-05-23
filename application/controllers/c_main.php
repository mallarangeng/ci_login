<?php

class C_main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();	
		// $this->is_logged_in();
	}	
	
	function is_logged_in()
	{
		$user = $this->session->userdata('username');
		$is_logged_in = $this->session->userdata('login');	
		
		if( !isset($is_logged_in) || $is_logged_in != true)
		{
			$this->load->view('access-denied');
		}
	}
	
	public function index()
	{
		$user = $this->session->userdata('username');
		$data['user'] = $user;
		
		echo $user;
		
		$data['main_view'] = 'main/v_main';
		$this->load->view('template', $data);	
	}
	
	public function profile()
	{
		$data['user'] = " Halaman Profile";
		$data['main_view'] = 'main/v_main';
		$this->load->view('template', $data);	
	}
}