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

	public function detail_kbm($id_pelajaran = NULL, $id_kelas = NULL)
	{
		if ($id_pelajaran == NULL || $id_kelas == NULL) {
			redirect('kbm/kbm');
		}
		if ($this->input->post('tanggal')) {
			$tanggal = $this->input->post('tanggal');
		} else {
			$tanggal = date('Y-m-d');
		}
		// LOAD TITLE
		$mydata['title'] = 'Detail KBM';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/kbm/kbm.css') . '">';
		// CONFIG PAGE
		$link = base_url('kbm/kbm');
		if ($this->input->get('redirect') == true) {
			$link = base_url('home');
		}
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['button_back'] = $link;
		$this->data['judul_halaman'] = 'Detail Kbm';
		// LOAD API
		$result = curl_get('kbm/today', ['id_sekolah' => $this->id_sekolah, 'id_staf' => $this->id_staf, 'id_kelas' => $id_kelas, 'id_pelajaran' => $id_pelajaran, 'tanggal' => $tanggal]);
		$presensi_setting = curl_get('presensi/setting', array('id_sekolah' => $this->id_sekolah));
		// LOAD MYDATA
		$mydata['id_kelas'] = $id_kelas;
		$mydata['id_pelajaran'] = $id_pelajaran;
		$mydata['result'] = $result->data;
		$mydata['presensi_setting'] = $presensi_setting;

		if (isset($_COOKIE['LAT']) && isset($_COOKIE['LONG'])) {
			$mydata['map'] = "https://maps.google.com/maps?q=" . $_COOKIE['LAT'] . "," . $_COOKIE['LONG'] . "&hl=en;z=14&output=embed";
			$mydata['lat'] = $_COOKIE['LAT'];
			$mydata['long'] = $_COOKIE['LONG'];
			$mydata['jarak'] = get_jarak($_COOKIE['LAT'], $_COOKIE['LONG'], $presensi_setting->setting_presensi_staf->lat_sekolah, $presensi_setting->setting_presensi_staf->lon_sekolah)['meters'];
		} else {
			$mydata['map'] = NULL;
			$mydata['lat'] = NULL;
			$mydata['long'] = NULL;
			$mydata['jarak'] = NULL;
			$this->data['js_add'][] = '<script>
				var lat_sekul = ' . $presensi_setting->setting_presensi_staf->lat_sekolah . ';
				var long_sekul = ' . $presensi_setting->setting_presensi_staf->lon_sekolah . ';
			</script>';
			$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/get_location.js"></script>';
		}

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_kbm', $mydata, TRUE);
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

	public function presensi_siswa($id_pelajaran = NULL, $id_kelas = NULL)
	{
		if ($id_pelajaran == NULL || $id_kelas == NULL) {
			redirect('kbm/kbm');
		}
		// LOAD TITLE
		$mydata['title'] = 'Presensi Siswa';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/kbm/presensi_siswa.css') . '">';
		// LOAD CONFIG PAGE
		if ($_SERVER['HTTP_REFERER'] == NULL) {
			$link = base_url('kbm/detail_kbm/' . $id_pelajaran . '/' . $id_kelas);
		} else {
			$arrLink = explode('/', $_SERVER['HTTP_REFERER']);
			if (in_array('presensi_siswa', $arrLink)) {
				$link = base_url('kbm/detail_kbm/' . $id_pelajaran . '/' . $id_kelas);
			} else {
				$link = $_SERVER['HTTP_REFERER'];
			}
		}
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['button_back'] = $link;
		if (strlen('Pendidikan jasmani, olahraga, dan kesehatan') > 20) {
			$pelajaran = inisial('Pendidikan jasmani, olahraga, dan kesehatan');
		} else {
			$pelajaran = 'Pendidikan jasmani, olahraga, dan kesehatan';
		}
		$this->data['judul_halaman'] = 'XI IPA 1<br><span style="font-size : 14px; font-weight: normal; color : #EC3528;">' . $pelajaran . '</span>';
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

		// LOAD CONFIG PAGE
		if ($_SERVER['HTTP_REFERER'] == NULL) {
			$link = base_url('home');
		} else {
			$arrLink = explode('/', $_SERVER['HTTP_REFERER']);
			if (in_array('kbm', $arrLink)) {
				$link = base_url('home');
			} else {
				$link = $_SERVER['HTTP_REFERER'];
			}
		}
		// LOAD GET FORM 
		$tanggal = $this->input->get('tanggal');
		if (!$tanggal) {
			$tanggal = date('Y-m-d');
		}
		$nice_tanggal = day_from_number(date('N', strtotime($tanggal))) . ', ' . date('d', strtotime($tanggal)) . ' ' . month_from_number(date('m', strtotime($tanggal))) . ' ' . date('Y', strtotime($tanggal));
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;
		$this->data['judul_halaman'] = 'Daftar KBM<br><span style="font-size : 14px; font-weight: normal; color : #EC3528;">' . $nice_tanggal . '</span>';
		$this->data['button_back'] = $link;
		$this->data['right_button']['kbm'] = true;
		// LOAD API 
		$result = curl_get('kbm', ['id_sekolah' => $this->id_sekolah, 'id_staf' => $this->id_staf, 'tanggal' => $tanggal]);

		// LOAD MYDATA 
		$mydata['result'] = $result->data;
		$mydata['tanggal'] = $tanggal;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('kbm', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
