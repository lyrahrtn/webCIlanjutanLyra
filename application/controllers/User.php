<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['konten']="home";
		$this->load->view('template', $data);
	}
	public function data_diri()
	{
		$data['konten']="data_diri";
		$this->load->view('template', $data);
	}
	public function gallery()
	{
		$data['konten']="gallery";
		$this->load->view('template', $data);
	}
	public function todo_list()
	{
		$data['konten']="todo_list";
		$this->load->view('template', $data);
	}
	public function home()
	{
		$data['konten']="home";
		$this->load->view('template', $data);
	}
	public function login()
	{
		$data['konten']="login";
		$this->load->view('template', $data);
	}
	public function form_component()
	{
		$data['konten']="form_component";
		$this->load->view('template', $data);
	}
}
