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
		$this->data['css_add'][] = '<style>
			.header.active:after {
				opacity: 0;
			}
        </style>';
		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/tugas/detail_tugas_utama.js"></script>';
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
		$this->data['khusus']['tugas'] = true;
		$this->data['text']['white'] = true;
		$this->data['judul_halaman'] = 'Detail Tugas';

		// LOAD API 
		$result = curl_get('tugas/peserta_kelas/', ['id_sekolah' => $this->id_sekolah, 'id_staf' => $this->id_staf, 'id_kelas' => $id_kelas, 'id_tugas' => $id_tugas]);
		$detail = curl_get('tugas/single/', ['id_sekolah' => $this->id_sekolah, 'id_tugas' => $id_tugas]);
		// LOAD MYDATA 
		$mydata['result'] = $result->data;
		$mydata['detail'] = $detail->data;
		$mydata['id_tugas'] = $id_tugas;
		$mydata['id_pelajaran'] = $id_pelajaran;
		$mydata['id_kelas'] = $id_kelas;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('jawaban_siswa', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_tugas($id_siswa = NULL, $id_tugas = NULL)
	{
		if (!$id_siswa || !$id_tugas) {
			redirect('tugas');
		}
		// LOAD TITLE
		$mydata['title'] = 'Detail Tugas';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/tugas/detail_tugas.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/tugas/detail_tugas.js"></script>';

		// LOAD CONFIG 
		$nice_name = '<br><span style="font-size : 14px; font-weight: normal; color : #EC3528;">' . tampil_text('Sidatata Al Jennar aad', 19) . '</span>';
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['judul_halaman'] = 'Tugas' . $nice_name;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_tugas', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function upload()
	{
		$id_tugas = $this->input->post('id_tugas');
		$arr['id_sekolah'] = $this->id_sekolah;
		$arr['id_staf'] = $this->id_staf;
		$arr['id_tugas'] = $id_tugas;
		if (!$_FILES['file_jawaban']['tmp_name'][0]) {
			$data['status'] = FALSE;
			$data['title'] = 'PERINGATAN';
			$data['message'] = 'File jawaban tidak boleh kosong!';
			echo json_encode($data);
			exit;
		}
		// var_dump($_FILES['file_jawaban']);
		$jmlh = count($_FILES['file_jawaban']['tmp_name']);
		$tugas = $_FILES['file_jawaban'];
		for ($i = 0; $i < $jmlh; $i++) {
			if ($tugas['size'][$i] > (10 * 1024 * 1024)) {
				$data['status'] = false;
				$data['title'] = 'PERINGATAN';
				$data['message'] = 'File ' . $tugas['name'][$i] . ' terlalu besar!';
				echo json_encode($data);
				exit;
			}
			$test = explode('.', $tugas["name"][$i]);
			$ext = end($test);
			if (!in_array($ext, array('jpg', 'png', 'rar', 'zip', 'docx', 'doc', 'pdf', 'xls', 'xlxs', 'jpeg', 'mp3', 'mp4'))) {
				$data['status'] = false;
				$data['title'] = 'PERINGATAN';
				$data['message'] = 'File ' . $tugas['name'][$i] . ' Tidak di izinkan!';
				echo json_encode($data);
				exit;
			}
			$name = uniqid() . '.' . $ext;
			$location = APPPATH . '../../data/sekolah_' . $this->id_sekolah . '/tugas_siswa/' . $name;
			$move = move_uploaded_file($tugas["tmp_name"][$i], $location);
			if ($move) {
				$fil[$i]['name'] = $tugas['name'][$i];
				$fil[$i]['unik'] = $name;
			} else {
				$data['status'] = false;
				$data['title'] = 'PERINGATAN';
				$data['message'] = 'File ' . $tugas['name'][$i] . ' gagal di upload!';
				echo json_encode($data);
				exit;
			}
		}
		$arr['tugas'] = json_encode($fil);
		$result = curl_post('tugas/upload_sementara/', $arr);
		if ($result->status == 200) {
			$rr['status'] = true;
			$rr['title'] = 'PEMBERITAHUAN';
		} else {
			$rr['status'] = false;
			$rr['title'] = 'PERINGATAN';
		}
		$rr['message'] = $result->message;

		echo json_encode($rr);
	}

	public function hapus_file()
	{
		$id_file = $this->input->post('id_file');
		$result = curl_post('tugas/hapus_file/', ['id_sekolah' => $this->id_sekolah, 'id_file' => $id_file]);
		if ($result->status == 200) {
			$data['status'] = true;
		} else {
			$data['status'] = false;
			$data['message'] = $result->message;
		}
		echo json_encode($data);
	}

	public function nilai()
	{
		$arrVar['nilai']     = 'Nilai';
		$arrVar['id_tugas'] = 'Tugas siswa';
		$arrVar['id_siswa'] = 'ID Siswa';
		$arrVar['id_kelas'] = 'ID Kelas';
		$arrVar['id_pelajaran'] = 'ID Pelajaran';
		foreach ($arrVar as $var => $value) {
			$$var = $this->input->post($var);
			if (!$$var) {
				$data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
				$arrAccess[] = false;
			} else {
				$arrAccess[] = true;
			}
		}
		$id_tugas_siswa = $this->input->post('id_tugas_siswa');

		$arr['id_sekolah'] = $this->id_sekolah;
		$arr['id_tugas'] = $id_tugas;
		$arr['id_siswa'] = $id_siswa;
		if ($id_tugas_siswa) {
			$arr['id_tugas_siswa'] = $id_tugas_siswa;
		}
		$arr['nilai'] = $nilai;
		if (!in_array(FALSE, $arrAccess)) {
			$action = curl_post('tugas/nilai/', $arr);
			if ($action->status == 200) {
				$data['status'] = true;
				$data['modal']['id'] = '#modalInputNilai';
				$data['modal']['action'] = 'hide';
				$data['load'][0]['parent'] = '#display_siswa';
				$data['load'][0]['reload'] = base_url('tugas/jawaban_siswa/' . $id_kelas . '/' . $id_pelajaran . '/' . $id_tugas . ' #reload_siswa');
				$data['alert']['title'] = 'PEMBERITAHUAN';
			} else {
				$data['status'] = false;
				$data['alert']['title'] = 'PERINGATAN';
			}
			$data['alert']['message'] = $action->message;
			echo json_encode($data);
			exit;
		} else {
			echo json_encode($data);
			exit;
		}
	}
}
