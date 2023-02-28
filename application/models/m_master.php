<?php

Class m_master extends CI_MODEL
{

    function auth_login($where)
	{
		return $this->db->get_where('mst_admin_login',$where);
	}

	function auth_client_login($where)
	{
		return $this->db->get_where('mst_member',$where);
	}
	

	// FUNGSI TIPE BUS UNTUK DATABASE
	function load_tipe_bus()
	{
		return $this->db->get("mst_tipe");
		//return $this->db->get_where("mst_tipe",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_tipe WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}
	
	function insert_tipe_bus($where)
	{
		$this->db->insert("mst_tipe",$where);
	}
	
	function update_tipe_bus($where,$update)
	{
		$this->db->where($where);
		$this->db->update("mst_tipe",$update);
	}

	function load_tipe_bus_aktif() 
	{
		return $this->db->get_where('mst_tipe',array('tipe_aktif' =>'1'));
	}



	// FUNGSI BUS UNTUK DATABASE
	function load_bus()
	{
		// return $this->db->get("mst_bus");

		$sql = "SELECT * FROM mst_bus A INNER JOIN mst_tipe B ON A.tipe_id=B.tipe_id";

		return $this->db->query($sql);

		//return $this->db->get_where("mst_tipe",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_tipe WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}
	
	function insert_bus($where)
	{
		$this->db->insert("mst_bus",$where);
	}
	
	function update_bus($where,$update)
	{
		$this->db->where($where);
		$this->db->update("mst_bus",$update);
	}



	// CREW DATABASE
	function load_crew()
	{
		return $this->db->get("mst_crew");
		//return $this->db->get_where("mst_tipe",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_tipe WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}
	
	function insert_crew($where)
	{
		$this->db->insert("mst_crew",$where);
	}
	
	function update_crew($where,$update)
	{
		$this->db->where($where);
		$this->db->update("mst_crew",$update);
	}

	// LOAD MEMBERS DATABASE

	function load_member()
	{
		return $this->db->get("mst_member");
		//return $this->db->get_where("mst_tipe",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_tipe WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}
	
	function insert_member($where)
	{
		$this->db->insert("mst_member",$where);
	}
	
	function update_member($where,$update)
	{
		$this->db->where($where);
		$this->db->update("mst_member",$update);
	}


	// FUNCTION TIPE_LOKASI

	function load_tipe_lokasi()
	{
		return $this->db->get("mst_location_tipe");
		//return $this->db->get_where("mst_tipe",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_tipe WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}
	
	

	function insert_tipe_lokasi($where)
	{
		$this->db->insert("mst_location_tipe",$where);
	}
	
	function update_tipe_lokasi($where,$update)
	{
		$this->db->where($where);
		$this->db->update("mst_location_tipe",$update);
	}


	function load_lokasi()
	{
		return $this->db->get("mst_location");
		//return $this->db->get_where("mst_tipe",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_tipe WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}
	
	// DATABASE LOKASI

	function insert_lokasi($where)
	{
		$this->db->insert("mst_location",$where);
	}
	
	function update_lokasi($where,$update)
	{
		$this->db->where($where);
		$this->db->update("mst_location",$update);
	}

	function load_admin()
	{
		return $this->db->get("mst_admin_login");
		//return $this->db->get_where("mst_crew",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_crew WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}

	
	function insert_admin($where)
	{
		$this->db->insert("mst_admin_login",$where);
	}
	
	function load_user()
	{
		return $this->db->get("mst_member");
		//return $this->db->get_where("mst_crew",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_crew WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}
}
