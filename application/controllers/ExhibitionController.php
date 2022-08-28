<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExhibitionController extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		redirect('Login/Login/show_login');
	}

	public function output($view, $data = null)
	{
		$this->load->view('template/datta-able/header');
		$this->load->view('template/datta-able/css');
		$this->load->view($view, $data);
		$this->load->view('template/datta-able/javascript');
		$this->load->view('template/datta-able/footer');
	}

	public function output_admin($view, $data = null)
	{
		$this->load->view('template/datta-able/header');
		$this->load->view('template/datta-able/css');
		$this->load->view('template/datta-able/sidebar');
		$this->load->view($view, $data);
		$this->load->view('template/datta-able/javascript');
		$this->load->view('template/datta-able/footer');
	}
}
