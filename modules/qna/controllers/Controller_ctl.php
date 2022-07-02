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
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/chatting/chatting.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/chatting/chatting.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function kontak_personal()
	{
		// LOAD TITLE
		$mydata['title'] = 'Kontak Personal';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/chatting/chatting.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/chatting/chatting.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('kontak_personal', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function kontak_grup()
	{
		// LOAD TITLE
		$mydata['title'] = 'Kontak Grup';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/chatting/chatting.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/chatting/chatting_2.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('kontak_grup', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function chatting()
	{
		// LOAD TITLE
		$mydata['title'] = 'Chatting';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/chatting/chatting.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/chatting/chatting_2.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('chatting', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
