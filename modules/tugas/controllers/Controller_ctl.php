<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Tugas';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_tugas()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail Tugas';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/tugas/detail_tugas.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/tugas/detail_tugas.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_tugas', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
