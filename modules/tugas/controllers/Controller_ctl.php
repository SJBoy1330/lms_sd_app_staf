<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		$this->id_sekolah = $this->session->userdata('lms_staf_id_sekolah');
		$this->id_staf = $this->session->userdata('lms_staf_id_staf');
		$this->id_kelas = $this->session->userdata('lms_staf_wali_kelas');
		is_logged_in();
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Tugas';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/tugas/tugas.css') . '">';

		// CONFIG HALAMAN
		if ($_SERVER['HTTP_REFERER'] == NULL) {
			$link = base_url('home');
		} else {
			$arrLink = explode('/', $_SERVER['HTTP_REFERER']);
			if (in_array('tugas', $arrLink)) {
				$link = base_url('home');
			} else {
				$link = $_SERVER['HTTP_REFERER'];
			}
		}
		$this->data['button_back'] = $link;
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['judul_halaman'] = 'Tugas';

		// LOAD API 
		$params['id_sekolah'] = $this->id_sekolah;
		$params['id_staf'] = $this->id_staf;
		if ($this->id_kelas) {
			$params['id_kelas'] = $this->id_kelas;
		}
		$result = curl_get('tugas/get_kelas/', $params);

		// DEKLARASI MYDATA 
		$mydata['result'] = $result->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function pelajaran($id_kelas = NULL)
	{
		if ($id_kelas == NULL) {
			redirect('tugas');
		}
		// LOAD TITLE
		$mydata['title'] = 'Pelajaran';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/tugas/tugas.css') . '">';

		// CONFIG HALAMAN
		if ($_SERVER['HTTP_REFERER'] == NULL) {
			$link = base_url('tugas');
		} else {
			$arrLink = explode('/', $_SERVER['HTTP_REFERER']);
			if (in_array('tugas', $arrLink)) {
				$link = base_url('tugas');
			} else {
				$link = $_SERVER['HTTP_REFERER'];
			}
		}
		$this->data['button_back'] = $link;
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['judul_halaman'] = 'Pelajaran';

		$wali_kelas = $this->input->get('wali_kelas');
		if (!$wali_kelas) {
			$wali_kelas = false;
		}
		// LOAD API 
		$par['id_staf'] = $this->id_staf;
		$par['id_sekolah'] = $this->id_sekolah;
		$par['id_kelas'] = $id_kelas;
		$par['wali_kelas'] = $wali_kelas;
		$result = curl_get('tugas/get_kelas_pelajaran/', $par);

		// DEKLARASI MYDATA 
		$mydata['result'] = $result->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('pelajaran', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function tugas_sekolah($id_kelas = NULL, $id_pelajaran = NULL)
	{
		if ($id_kelas == NULL || $id_pelajaran == NULL) {
			redirect('tugas');
		}
		// LOAD TITLE
		$mydata['title'] = 'Tugas Sekolah';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/tugas/tugas.css') . '">';
		// CONFIG HALAMAN
		if ($_SERVER['HTTP_REFERER'] == NULL) {
			$link = base_url('tugas/pelajaran/' . $id_kelas);
		} else {
			$arrLink = explode('/', $_SERVER['HTTP_REFERER']);
			if (in_array('tugas', $arrLink)) {
				$link = base_url('tugas/pelajaran/' . $id_kelas);
			} else {
				$link = $_SERVER['HTTP_REFERER'];
			}
		}
		$this->data['button_back'] = $link;
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['judul_halaman'] = 'Tugas Sekolah';
		// LOAD API 
		$result = curl_get('tugas/', ['id_sekolah' => $this->id_sekolah, 'id_staf' => $this->id_staf, 'id_pelajaran' => $id_pelajaran, 'id_kelas' => $id_kelas]);

		// DEKLARASI MYDATA 
		$mydata['result'] = $result->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('tugas_sekolah', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function jawaban_siswa($id_kelas = NULL, $id_pelajaran = NULL, $id_tugas = NULL)
	{
		if ($id_kelas == NULL || $id_pelajaran == NULL || $id_tugas == NULL) {
			redirect('tugas');
		}
		// LOAD TITLE
		$mydata['title'] = 'Tugas Sekolah';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/tugas/tugas.css') . '">';
		// CONFIG HALAMAN
		if ($_SERVER['HTTP_REFERER'] == NULL) {
			$link = base_url('tugas/tugas_sekolah/' . $id_kelas . '/' . $id_pelajaran);
		} else {
			$arrLink = explode('/', $_SERVER['HTTP_REFERER']);
			if (in_array('tugas', $arrLink)) {
				$link = base_url('tugas/tugas_sekolah/' . $id_kelas . '/' . $id_pelajaran);
			} else {
				$link = $_SERVER['HTTP_REFERER'];
			}
		}
		$this->data['button_back'] = $link;
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['judul_halaman'] = 'Daftar Siswa';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('jawaban_siswa', $mydata, TRUE);
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
