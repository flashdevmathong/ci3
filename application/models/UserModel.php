<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 class userModel extends CI_Model{

	public function loginUser($data)
	{
        $this->db->select('*');
		$this->db->where('musername',$data['musername']);
		$this->db->where('mpassword',$data['mpassword']);
		$this->db->from('snpuser');

		$this->db->limit(1);
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
		{
        	return $query->row();
		}
		else
		{
			return false;
		}
	} 

    public function registerUser($data)
	{
		return  $this->db->insert('snpuser',$data);
	}

	public function listUser()
	{
		return $this->db->get('snpuser')->result();
	}

	public function deleteUser($data,$picture)
	{
	
        unlink('dist/img/'.$picture);
		return $this->db->delete('snpuser', $data); 
	}

    public function findRowUser($data)
	{
		$this->db->select('*');
		$this->db->where('mid',$data);
		$this->db->from('snpuser');
		$this->db->limit(1);
		$query = $this->db->get();

		return $query->row();
	}

	public function updateUser($id,$data)
	{
		return $this->db->where('mid', $id)->update('snpuser', $data);
	     
	}



 }
