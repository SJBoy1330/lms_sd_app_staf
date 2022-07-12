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

    public function update_multiple_bab()
    {
        $id_pelajaran = $this->input->post('id_pelajaran');
        $bab = $this->input->post('bab');
        $id_bab = $this->input->post('id_bab');
        if (count($bab) > 0) {
            for ($i = 0; $i < count($bab); $i++) {
                $arr[$i]['id_bab'] = $id_bab[$i];
                $arr[$i]['judul'] = $bab[$i];
                if (!$bab[$i]) {
                    $res['status'] = false;
                    $res['alert']['title'] = 'PERINGATAN';
                    $res['alert']['message'] = 'Judul bab tidak boleh kosong!';
                    echo json_encode($res);
                    exit;
                }
            }

            $dt['id_sekolah'] = $this->id_sekolah;
            $dt['data_bab'] = json_encode($arr);

            $result = curl_post('materi/edit_bab_multi', $dt);
            $res['alert']['message'] = $result->message;
            if ($result->status == 200) {
                $res['status'] = true;
                $res['alert']['title'] = 'PEMBERITAHUAN';
                $res['load'][0]['parent'] = '#display_bab';
                $res['load'][0]['reload'] = base_url('materi/detail_bab/' . $id_pelajaran) . ' #reload_bab';
                echo json_encode($res);
                exit;
            } else {
                $res['status'] = false;
                $res['alert']['title'] = 'PERINGATAN';
                echo json_encode($res);
                exit;
            }
        } else {
            $res['status'] = false;
            $res['title'] = 'PERINGATAN';
            $res['message'] = 'Tambah bab terlebih dahulu!';
            echo json_encode($res);
            exit;
        }
    }
}
