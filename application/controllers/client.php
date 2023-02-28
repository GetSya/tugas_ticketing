<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
        $this->load->model('m_login');
	}
	
	function index()
	{
		if($this->session->userdata('status')== 'login_member')
		{
			redirect(base_url("client/dashboard"));
		}
		else
		{
			$this->load->view('login');
		}
	}
	
	function ceklogin()
	{
		$username = $this->input->post('username');
		$member_password = $this->input->post('member_password');
		
		
		$where = array(
			'username'=>$username,
			'member_password'=>$member_password
		);
		
		$cek = $this->m_login->auth_client_login($where)->num_rows();
		
		if($cek>0)
		{
			
			$dataSession = array(
				'username'=>$username,
				'status'=>'login_member'
			);
			$this->session->set_userdata($dataSession);
			
			
			$result = array(
				'STATUS'=>'1',
				'MESSAGE'=>'Login berhasil'
			);
			
			print json_encode($result);
		}
		else
		{
			$result = array(
				'STATUS'=>'0',
				'MESSAGE'=>'Login gagal'
			);
			
			print json_encode($result);
		}
		
	}

	function dashboard()
	{
		
		if($this->session->userdata('status')== 'login_member')
		{
			$this->load->view('dashboard');
		}
		else
		{
			$this->load->view('login');
		}
		
		
	}

	function register()
	{
		if($this->session->userdata('status')== 'login_member')
		{
			$data['register'] = $this->m_login->load_userku()->result();
			$this->load->view('register',$data);
		}
		else
		{
			$this->load->view('register');
		}
	}
	function user_tambah()
	{
		$member_email = $this->input->post('member_email');
		$username = $this->input->post('username');
		$member_password = $this->input->post('member_password');
		$member_nama = $this->input->post('member_nama');
		$member_phone = $this->input->post('member_phone');
		$member_gender = $this->input->post('member_gender');
		$member_aktif = $this->input->post('member_aktif');
		
		$where = array(
			'member_email'=>$member_email,
			'username'=>$username,
			'member_password'=>$member_password,
			'member_nama'=>$member_nama,
			'member_phone'=>$member_phone,
			'member_gender'=>$member_gender,
			'member_aktif'=>$member_aktif
		);
	
		
		$this->m_login->insert_user($where);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("client"));
	}
}
