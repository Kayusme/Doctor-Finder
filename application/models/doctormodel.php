<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class doctormodel extends CI_Model{

	function displayrecords()
	{
//		$query=$this->db->query("select * from docinfo limit 6");
//		return $query->result();

		$this->db->select("*");
		$this->db->from("doctors");
		//$this->db->limit("6");

		$query = $this->db->get();
		return $query->result();
	}
	function displayhospital()
	{
//		$query=$this->db->query("select * from docinfo limit 6");
//		return $query->result();

		$this->db->select("*");
		$this->db->from("hospitals");
		$this->db->limit("6");

		$query = $this->db->get();
		return $query->result();
	}
	function searchoption()
	{
		$area = $this->input->post('name',true);
		$degree = $this->input->post('degree',true);
		$speciality = $this->input->post('speciality',true);

		$this->db->select('*');
		$this->db->from('doctors');
		$this->db->like('name', $area);
		$this->db->like('degree',$degree);
		$this->db->like('specialty',$speciality);
		$query2 = $this->db->get();

		return $query2->result();
	}
	function searchhos()
	{
		$name = $this->input->post('name',true);
		$area = $this->input->post('area',true);

		$this->db->select('*');
		$this->db->from('hospitals');
		$this->db->like('name', $name);
		$this->db->like('area',$area);
		$query2 = $this->db->get();

		return $query2->result();
	}



}
