<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class al_hos extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('doctormodel');
	}


	public function index()
	{
		$result['data']=$this->doctormodel->displayhospital();
		$this->load->view('all_hos',$result);
	}
	public function search_hospital(){
		$result['data']=$this->doctormodel->searchoption();
		$this->load->view('all_hos',$result);
	}



}
