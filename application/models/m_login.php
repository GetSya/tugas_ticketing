<?php

Class m_login extends CI_MODEL
{

	function auth_client_login($where)
	{
		return $this->db->get_where('mst_member',$where);
	}

	function load_userku()
	{
		return $this->db->get("mst_member");
		//return $this->db->get_where("mst_crew",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_crew WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}

	
	function insert_user($where)
	{
		$this->db->insert("mst_member",$where);
	}
}
