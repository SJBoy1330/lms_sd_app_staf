<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		$this->id_sekolah = $this->session->userdata('lms_staf_id_sekolah');
		$this->id_staf = $this->session->userdata('lms_staf_id_staf');
		is_logged_in();
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Jadwal';
		// LOAD DATA
		if ($this->input->get('hari')) {
			$day = $this->input->get('hari');
		} else {
			$day = date('N');
		}
		$mydata['result'] = curl_get('jadwal/lengkap', ['id_sekolah' => $this->id_sekolah, 'id_staf' => $this->id_staf])->data;

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/kbm/jadwal.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('jadwal', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_kbm()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail KBM';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_kbm', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function edit_kbm()
	{
		// LOAD TITLE
		$mydata['title'] = 'Edit KBM';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/kbm/kbm.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('edit_kbm', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_materi()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail Materi';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/kbm/detail_materi.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_materi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function presensi_siswa()
	{
		// LOAD TITLE
		$mydata['title'] = 'Presensi Siswa';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/kbm/presensi_siswa.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_siswa', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function kbm()
	{
		// LOAD TITLE
		$mydata['title'] = 'KBM';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/kbm/kbm.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('kbm', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
