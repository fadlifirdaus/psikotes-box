<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Finish_pg
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Finish_pg extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //
        $this->load->model('m_soal');
        $id = $_SESSION['test_pilgan_id'];
        $data['pilgan'] = $this->m_soal->get_pilgan($id);
        $idProfil = $data['pilgan']->user_id;
        $data['profil'] = $this->m_soal->get_user($idProfil);

        $this->cek_jawaban();
        $data['nilai'] = $this->hitung_nilai();
        $this->pg_selesai();
        $data['userx'] = $this->session->user;
        $this->load->view('templates/header', $data);
        $this->load->view('v_hasil_pilgan', $data);
        $this->load->view('templates/footer');

    }
    public function hitung_nilai()
    {
        $this->load->model('m_soal');
        $testid = $this->m_soal->get_test_pilgan_id();
        $result = $this->m_soal->hitung_nilai($testid);
        $result = array_sum($result) * 10;
        return $result;
    }

    public function cek_jawaban()
    {
        $this->load->model('m_soal');
        $x = $_SESSION['pgIdSoal'];
        $y = $_SESSION['pgNoSoal'];
        $test_pilgan_id = $_SESSION['test_pilgan_id'];
        $kunci_jawaban = $this->m_soal->cek_jawaban($_SESSION['pgIdSoal']);
        $jawaban = $_SESSION['pgJawaban'][$x] = $this->input->post('pilganRadio');
        $kolomJawab = 'jawaban' . $y;

        if ($jawaban == $kunci_jawaban) {
            echo "benar";
            $this->m_soal->update_test_pilgan($test_pilgan_id, $kolomJawab, 1);
        } else {
            echo "salah";
            $this->m_soal->update_test_pilgan($test_pilgan_id, $kolomJawab, 0);

        }
        $_SESSION['pgSelesai'] = false;
    }

    public function pg_selesai()
    {
        date_default_timezone_set('Asia/Jakarta');
        $_SESSION['pgSelesai'] = true;
        $status = $_SESSION['pgSelesai'];
        $now = round(microtime(true));
        $now = date("Y-m-d H:i:s", $now);
        $id = $_SESSION['test_pilgan_id'];
        $nilai = $this->hitung_nilai();
        $this->m_soal->update_status_test_pilgan($id, $status, $now, $nilai);
    }

}

/* End of file Finish_pg.php */
/* Location: ./application/controllers/Finish_pg.php */
