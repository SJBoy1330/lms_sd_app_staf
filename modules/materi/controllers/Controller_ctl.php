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
		$mydata['title'] = 'Materi';
		
		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/materi/materi.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_bab()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail Bab';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/materi/detail_bab.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/materi/detail_bab.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_bab', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function edit_materi()
	{
		// LOAD TITLE
		$mydata['title'] = 'Edit Nateri';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/materi/materi.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('edit_materi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function tambah_materi()
	{
		// LOAD TITLE
		$mydata['title'] = 'Tambah Nateri';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/materi/materi.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tambah_materi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

}
