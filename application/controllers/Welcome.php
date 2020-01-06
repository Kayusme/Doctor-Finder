<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
		$this->load->view('welcome_message',$result);
	}
	public function all_doc()
	{
		$result['data']=$this->doctormodel->displayrecords();
		$this->load->view('all_doc',$result);
	}
	public function all_hos()
	{
		$result['data']=$this->doctormodel->displayrecords();
		$this->load->view('all_hos',$result);
	}
	public function about()
	{
		$result['data']=$this->doctormodel->displayrecords();
		$this->load->view('about',$result);
	}

	public function search_hospital(){
		$result['data']=$this->doctormodel->searchhos();
		$this->load->view('search_hospital',$result);
	}
	public function search_doc(){
		$result['data']=$this->doctormodel->searchoption();
		$this->load->view('search_doc',$result);
	}



}
