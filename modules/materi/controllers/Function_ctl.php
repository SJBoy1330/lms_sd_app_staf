<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Frontend
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
        $this->id_sekolah = $this->session->userdata('lms_staf_id_sekolah');
        $this->id_staf = $this->session->userdata('lms_staf_id_staf');
        is_logged_in();
    }

    public function tambah_bab()
    {
        $arrVar['nama_bab']   = 'Judul bab';
        $arrVar['id_pelajaran']   = 'ID Pelajaran';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);
            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (!in_array(FALSE, $arrAccess)) {
            // DEKLARASI DATA
            $arr['id_sekolah'] = $this->id_sekolah;
            $arr['nama'] = $nama_bab;
            $arr['id_pelajaran'] = $id_pelajaran;
            // LOAD DATA API
            $insert = curl_post('materi/tambah_bab/', $arr);
            $data['status'] = $insert->status;
            $data['alert']['message'] = $insert->message;
            if ($insert->status == 200) {
                $data['alert']['title'] = 'PEMBERITAHUAN';
                $data['modal']['id'] = '#modalTambahBab';
                $data['modal']['action'] = 'hide';
                $data['load'][0]['parent'] = '#display_bab';
                $data['load'][0]['reload'] = base_url('materi/detail_bab/' . $id_pelajaran) . ' #reload_bab';
                $data['load'][1]['parent'] = '#display_detail';
                $data['load'][1]['reload'] = base_url('materi/detail_bab/' . $id_pelajaran) . ' #reload_detail';
            } else {
                $data['alert']['title'] = 'PERINGATAN';
            }
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }
}
