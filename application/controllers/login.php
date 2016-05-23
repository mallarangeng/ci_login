<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}		
	
	public function index()
	{
		$this->load->view('v_login');
	}
	
	public function login_validate()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$username = mysql_real_escape_string($user);
		$password = mysql_real_escape_string($pass);
		
		if($this->m_login->validate($username, $password) == TRUE)
		{
			$data = array('username' => $username, 'login' => TRUE);
			$this->session->set_userdata($data);
			redirect('c_main');
		}
		else
		{
			$this->session->set_flashdata('message', 'Maaf, username atau password Anda salah');
			redirect('login/index');	
		}	
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();		
	}
}