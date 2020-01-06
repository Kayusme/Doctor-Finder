<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class al_doc extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('doctormodel');
	}


	public function index()
	{
		$result['data']=$this->doctormodel->displayrecords();
		$this->load->view('all_doc',$result);
	}
	public function search_doc(){
		$result['data']=$this->doctormodel->searchoption();
		$this->load->view('all_doc',$result);
	}



}
