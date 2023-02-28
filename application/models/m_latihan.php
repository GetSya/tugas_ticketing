<?php

Class m_latihan extends CI_MODEL
{

    function get_barang ()
    {
        return $this->db->get("barang");
    }

    function lihat_barang()
    {
        return $this->db->query("SELECT * FROM barang");
    }

    function lihat_kategori()
    {
        return $this->db->query("SELECT * FROM kategori");
    }

    function lihat_kasir()
    {
        return $this->db->query("SELECT * FROM kasir");
    }
    
    function insert_ktg($data)
    {
        $this->db->insert("kategori",$data);
    }

    function insert_kasir($data)
    {
        $this->db->insert("kasir",$data);
    }
	
	function lihat_kategori_by_id($data)
	{
		return $this->db->get_where('kategori',$data);
	}
	
	function update_kategori($data,$where){
		$this->db->where($where);
		$this->db->update('kategori',$data);
	}
	
	function delete_kategori($data)
	{
		$this->db->where($data);
		$this->db->delete('kategori');
	}

}
