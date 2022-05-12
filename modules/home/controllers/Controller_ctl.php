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
		$mydata['title'] = 'Home';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function list_pengumuman(){
		
		// LOAD TITLE
		$mydata['title'] = 'Pengumuman';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('list_pengumuman', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_pengumuman()
	{

		// LOAD TITLE
		$mydata['title'] = 'Detail Pengumuman';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_pengumuman', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function list_berita()
	{
		// LOAD TITLE
		$mydata['title'] = 'List Berita';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/berita/listberita.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('list_berita', $mydata, TRUE);
		$this->display($this->input->get('routing'));	
	}

	public function detail_berita()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail Berita';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_berita', $mydata, TRUE);
		$this->display($this->input->get('routing'));	
	}
}
