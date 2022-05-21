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
		$mydata['title'] = 'Jurnal Guru';

        // LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/jurnal/jurnal.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('jurnal_guru', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

    public function detail_jurnal_guru()
	{
		// LOAD TITLE
		$mydata['title'] = 'Jurnal Guru';

        // LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/jurnal/jurnal.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_jurnal_guru', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
