<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model('m_master');
	}
	
	function index()
	{
		if($this->session->userdata('status')== 'login')
		{
			redirect(base_url("admin/master/dashboard"));
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
	
	function ceklogin()
	{
		$admin_email = $this->input->post('admin_email');
		$admin_password = $this->input->post('admin_password');
		$enkrip_password = md5($admin_password);
		
		$where = array(
			'admin_email'=>$admin_email,
			'admin_password'=>$enkrip_password
		);
		
		$cek = $this->m_master->auth_login($where)->num_rows();
		
		if($cek>0)
		{
			
			$dataSession = array(
				'username'=>$admin_email,
				'status'=>'login'
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
		
		if($this->session->userdata('status')== 'login')
		{
			$this->load->view('admin/dashboard');
		}
		else
		{
			$this->load->view('admin/login');
		}
		
		
	}

//TIPEBUS
	
	function tipebus()
	{
		if($this->session->userdata('status')== 'login')
		{
			$data['tipebus'] = $this->m_master->load_tipe_bus()->result();
			$this->load->view('admin/tipebus',$data);
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
	
	function tipebus_tambah()
	{
		$tipe_id = $this->input->post('tipe_id');
		$tipe_nama = $this->input->post('tipe_nama');
		
		$where = array(
			'tipe_id'=>$tipe_id,
			'tipe_nama'=>$tipe_nama
		);
		
		$this->m_master->insert_tipe_bus($where);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}
	
	function tipebus_update()
	{
		$tipe_id = $this->input->post('tipe_id');
		$tipe_nama = $this->input->post('tipe_nama');
		$get_aktif = $this->input->post('tipe_aktif');
		$tipe_aktif = ($get_aktif) ? "1" : "0";
		
		$where = array(
			'tipe_id'=>$tipe_id
		);
		
		$update = array(
			'tipe_nama'=>$tipe_nama,
			'tipe_aktif'=>$tipe_aktif
		);
		
		$this->m_master->update_tipe_bus($where,$update);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}
	
//crew

	function crew()
	{
		if($this->session->userdata('status')== 'login')
		{
			$data['crew'] = $this->m_master->load_crew()->result();
			$this->load->view('admin/crew',$data);
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
	
	function crew_tambah()
	{
		$crew_id = $this->input->post('crew_id');
		$crew_nama = $this->input->post('crew_nama');
		$crew_phone = $this->input->post('crew_phone');
		$crew_email = $this->input->post('crew_email');
		$crew_role = $this->input->post('crew_role');
		
		
		
		$where = array(
			'crew_id'=>$crew_id,
			'crew_nama'=>$crew_nama,
			'crew_phone'=>$crew_phone,
			'crew_email'=>$crew_email,
			'crew_role'=>$crew_role
			
		);
		
		$this->m_master->insert_crew($where);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}
	
	function crew_update()
	{
		$crew_id = $this->input->post('crew_id');
		$crew_nama = $this->input->post('crew_nama');
		$crew_phone = $this->input->post('crew_phone');
		$crew_email = $this->input->post('crew_email');
		$crew_role = $this->input->post('crew_role');
		$get_aktif = $this->input->post('crew_aktif');
		$crew_aktif = ($get_aktif) ? "1" : "0";
		
		$where = array(
			'crew_id'=>$crew_id
		);
		
		$update = array(
			'crew_nama'=>$crew_nama,
			'crew_phone'=>$crew_phone,
			'crew_email'=>$crew_email,
			'crew_role'=>$crew_role,
			'crew_aktif'=>$crew_aktif
			
		);
		
		$this->m_master->update_crew($where,$update);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}

//LOKASI

	function lokasi()
	{
		if($this->session->userdata('status')== 'login')
		{
			$data['loksai'] = $this->m_master->load_lokasi()->result();
			$this->load->view('admin/lokasi',$data);
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
	
	function lokasi_tambah()
	{
		$location_id = $this->input->post('location_id');
		$location_nama = $this->input->post('location_nama');
		$location_coordinate = $this->input->post('location_coordinate');
		$loc_tipe_id = $this->input->post('loc_tipe_id');
		
		$where = array(
			'location_id'=>$location_id,
			'location_nama'=>$location_nama
		);
		
		$this->m_master->insert_lokasi($where);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}
	
//Member

	function member()
	{
		if($this->session->userdata('status')== 'login')
		{
			$data['member'] = $this->m_master->load_member()->result();
			$this->load->view('admin/member',$data);
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
	
	function member_tambah()
	{
		$member_email = $this->input->post('member_email');
		$member_password = $this->input->post('member_password');
		$enkrip_password = md5($member_password);

		$member_nama = $this->input->post('member_nama');
		$member_phone = $this->input->post('member_phone');
		$member_gender = $this->input->post('member_gender');
		$member_poin = $this->input->post('member_poin');
		$member_grade = $this->input->post('member_grade');
		
		
		
		$where = array(
			'member_email'=>$member_email,
			'member_password'=>$enkrip_password,
			'member_nama'=>$member_nama,
			'member_phone'=>$member_phone,
			'member_gender'=>$member_gender,
			'member_poin'=>$member_poin,
			'member_grade'=>$member_grade
			
		);
		
		$this->m_master->insert_member($where);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}
	
	function member_update()
	{
		$member_email = $this->input->post('member_email');
		$member_password = $this->input->post('member_password');
		$enkrip_password = md5($member_password);

		$member_nama = $this->input->post('member_nama');
		$member_phone = $this->input->post('member_phone');
		$member_gender = $this->input->post('member_gender');
		$member_poin = $this->input->post('member_poin');
		$member_grade = $this->input->post('member_grade');
		$get_aktif = $this->input->post('member_aktif');
		$member_aktif = ($get_aktif) ? "1" : "0";
		
		$where = array(
			'member_email'=>$member_email
		);
		
		$update = array(
			'member_password'=>$enkrip_password,
			'member_nama'=>$member_nama,
			'member_phone'=>$member_phone,
			'member_gender'=>$member_gender,
			'member_poin'=>$member_poin,
			'member_grade'=>$member_grade,
			'member_aktif'=>$member_aktif
			
		);
		
		$this->m_master->update_member($where,$update);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}
	
//BUS

	function bus()
	{
		if($this->session->userdata('status')== 'login')
		{
			$data['bus'] = $this->m_master->load_bus()->result();
			$data['tipebus'] = $this->m_master->load_tipe_bus_aktif()->result();
			$this->load->view('admin/bus',$data);
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
	
	function bus_tambah()
	{
		$bus_id = $this->input->post('bus_id');
		$bus_nama = $this->input->post('bus_nama');
		$tipe_id = $this->input->post('tipe_id');
		$bus_series = $this->input->post('bus_series');
		$bus_kapasitas = $this->input->post('bus_kapasitas');
		$bus_format_kursi = $this->input->post('bus_format_kursi');
		$bus_kelas = $this->input->post('bus_kelas');
		
		$bus_ac = ($this->input->post('bus_ac'))?"1":"0";
		$bus_snack = ($this->input->post('bus_snack'))?"1":"0";;
		$bus_toilet = ($this->input->post('bus_toilet'))?"1":"0";;
		$bus_recliner = ($this->input->post('bus_recliner'))?"1":"0";;
		$bus_stopkontak = ($this->input->post('bus_stopkontak'))?"1":"0";;

		
		$where = array(
			'bus_id'=>$bus_id,
			'bus_nama'=>$bus_nama,
			'tipe_id'=>$tipe_id,
			'bus_series'=>$bus_series,
			'bus_kapasitas'=>$bus_kapasitas,
			'bus_format_kursi'=>$bus_format_kursi,
			'bus_kelas'=>$bus_kelas,
			'bus_ac'=>$bus_ac,
			'bus_snack'=>$bus_snack,
			'bus_toilet'=>$bus_toilet,
			'bus_recliner'=>$bus_recliner,
			'bus_stopkontak'=>$bus_stopkontak
		);
		
		$this->m_master->insert_bus($where);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}
	
	function bus_update()
	{
		$bus_id = $this->input->post('bus_id');
		$bus_nama = $this->input->post('bus_nama');
		$tipe_id = $this->input->post('tipe_id');
		$bus_series = $this->input->post('bus_series');
		$bus_kapasitas = $this->input->post('bus_kapasitas');
		$bus_format_kursi = $this->input->post('bus_format_kursi');
		$bus_kelas = $this->input->post('bus_kelas');
		$bus_ac = $this->input->post('bus_ac');
		$bus_snack = $this->input->post('bus_snack');
		$bus_toilet = $this->input->post('bus_toilet');
		$bus_recliner = $this->input->post('bus_recliner');
		$bus_stopkontak = $this->input->post('bus_stopkontak');
		$bus_aktif = $this->input->post('bus_aktif');
	
		
		$where = array(
			'bus_id'=>$bus_id
		);
		
		$update = array(
			'bus_nama'=>$bus_nama,
			'tipe_id'=>$tipe_id,
			'bus_series'=>$bus_series,
			'bus_kapasitas'=>$bus_kapasitas,
			'bus_format_kursi'=>$bus_format_kursi,
			'bus_kelas'=>$bus_kelas,
			'bus_ac'=>$bus_ac,
			'bus_snack'=>$bus_snack,
			'bus_toilet'=>$bus_toilet,
			'bus_recliner'=>$bus_recliner,
			'bus_snack'=>$bus_snack,
			'bus_aktif'=>$bus_aktif
		);
		
		$this->m_master->update_bus($where,$update);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}
}
