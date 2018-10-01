<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {
   
	public function all()
	{
	    return $this->db->get('barang')->result();
	}	

	public function create($data)
	{
	    return $this->db->insert('barang', $data);
	}
	
	public function find($id)
	{
	    return $this->db->select('*')->where('id', $id)->get('barang')->row_array();
	}
	
	public function update($data, $id)
	{		
			return $this->db->where('id', $id)->update('barang', $data);
	}

	public function delete($id)
	{
	    return $this->db->where('id', $id)->delete('barang');
	}
    
}
