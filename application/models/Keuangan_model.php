<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan_model extends CI_Model
{

    public $table = 'keuangan';
    public $id = 'id';

	function get_all()
    {        
        return $this->db->get($this->table)->result();
    }
	function get_by_id($id)
	 {
		 $this->db->where($this->id, $id);
		 return $this->db->get($this->table)->row();
	 }
 
	 // insert data
	 function insert($data)
	 {
		 $this->db->insert($this->table, $data);
	 }
 
	 // update data
	 function update($id, $data)
	 {
		 $this->db->where($this->id, $id);
		 $this->db->update($this->table, $data);
	 }
 
	 // delete data
	 function delete($id)
	 {
		 $this->db->where($this->id, $id);
		 $this->db->delete($this->table);
	 }

}
