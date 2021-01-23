<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Test extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->is_login) {
            $data['userx'] = $this->session->user;
            $this->load->view('templates/header', $data);
            $this->load->view('v_test');
            $this->load->view('templates/footer');
        } else {
            redirect('auth/');
        }

    }

    public function session_init()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = round(microtime(true) * 1000);
        // $_SESSION['user_id'] = 1;
        $_SESSION['pgStartTime'] = $now;
        $_SESSION['pgEndTime'] = $now + 30 * 60000;
        $_SESSION['pgDistance'] = $_SESSION['pgEndTime'] - $now;
        $_SESSION['pgSelesai'] = false;
        $_SESSION['pgNoSoal'] = $this->uri->segment(3);
    }

    // menambahkan session ke database
    // sekaligus buat id_test baru
    public function array_session()
    {
        $this->load->model('m_soal');
        $start = date("Y-m-d H:i:s", $_SESSION['pgStartTime'] / 1000);
        $due_date = date("Y-m-d H:i:s", $_SESSION['pgEndTime'] / 1000);
        $session = array(
            'user_id' => $_SESSION['user_id'],
            'start_date' => $start,
            'due_date' => $due_date,
            'selesai' => $_SESSION['pgSelesai'],
        );
        $this->m_soal->input_test_pilgan($session);
    }

    public function cek_test_id()
    {
        $this->load->model('m_soal');
        $id = $_SESSION['user_id'];
        $due_date = date("Y-m-d H:i:s", time());
        //mengembalikan value jika terdapat id
        return $this->m_soal->cek_test_id_pilgan($id, $due_date);
    }

    public function pilgan($num = 1)
    {
        $this->load->model('m_soal');

        // periksa jika test_id belum dibuat,
        if (!$this->cek_test_id()) {
            $this->session_init();
            $this->array_session();
            $_SESSION['test_pilgan_id'] = $this->m_soal->get_test_pilgan_id();
        } else if ($this->m_soal->cek_status_pilgan($_SESSION['test_pilgan_id'])) {
            redirect('Test');
        }

        //menyamakan url segment
        $num--;

        $data['soal'] = $this->m_soal->get_data()->row($num);
        $data['jawaban'] = array(
            'jawaban1' => $data['soal']->jawaban,
            'jawaban2' => $data['soal']->alt_satu,
            'jawaban3' => $data['soal']->alt_dua,
            'jawaban4' => $data['soal']->alt_tiga,
            'jawaban5' => $data['soal']->alt_empat,
        );
        shuffle($data['jawaban']);
        $_SESSION['pgIdSoal'] = $data['soal']->id;
        $data['userx'] = $this->session->user;
        $this->load->view('templates/header', $data);
        $this->load->view('v_test_pilgan', $data);
        $this->load->view('templates/footer');
        $_SESSION['pgNoSoal'] = $this->uri->segment(3);

    }

    public function cek_jawaban()
    {
        $this->load->model('m_soal');

        $x = $_SESSION['pgIdSoal'];
        $y = $_SESSION['pgNoSoal'];
        $test_pilgan_id = $_SESSION['test_pilgan_id'];
        $kunci_jawaban = $this->m_soal->cek_jawaban($_SESSION['pgIdSoal']);
        $jawaban = $_SESSION['pgJawaban'][$x] = $this->input->post('pilganRadio');

        //variable kolom
        $kolomJawab = 'jawaban' . $y;

        if ($jawaban == $kunci_jawaban) {
            // echo "benar";
            // var_dump($kolomJawab);
            $this->m_soal->update_test_pilgan($test_pilgan_id, $kolomJawab, 1);
        } else {
            // echo "salah";
            // var_dump($kolomJawab);
            $this->m_soal->update_test_pilgan($test_pilgan_id, $kolomJawab, 0);
        }
    }

    public function pg_next()
    {
        $this->cek_jawaban();
        $_SESSION['pgNoSoal']++;
        $page = intval($_SESSION['pgIdSoal']) + 1;
        var_dump($page);
        redirect(base_url('Test/pilgan/') . $page);
    }

    public function pg_prev()
    {
        $this->cek_jawaban();
        $_SESSION['pgNoSoal']--;
        $page = intval($_SESSION['pgIdSoal']) - 1;
        var_dump($page);
        redirect(base_url('Test/pilgan/') . $page);
    }
    public function pg_berakhir()
    {

        $this->session->set_flashdata('berakhir', 'session anda berakhir');
        $data['userx'] = $this->session->user;
        $this->load->view('templates/header', $data);
        $this->load->view('v_test');
        $this->load->view('templates/footer');
    }

    public function print_pdf()
    {
        $this->load->model('m_soal');
        $id = $_SESSION['test_pilgan_id'];
        $data['pilgan'] = $this->m_soal->get_pilgan($id);
        $id_user = $data['pilgan']->user_id;
        $data['user'] = $this->m_soal->get_user($id_user);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('v_pilgan_pdf', $data);
    }

    public function session_init_essay()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = round(microtime(true) * 1000);
        // $_SESSION['user_id'] = 1;
        $_SESSION['essayStartTime'] = $now;
        $_SESSION['essayEndTime'] = $now + 30 * 60000;
        $_SESSION['essayDistance'] = $_SESSION['essayEndTime'] - $now;
        $_SESSION['essaySelesai'] = false;
        $_SESSION['essayNoSoal'] = $this->uri->segment(3);
    }
    public function array_session_essay()
    {
        $this->load->model('m_soal');
        $start = date("Y-m-d H:i:s", $_SESSION['essayStartTime'] / 1000);
        $due_date = date("Y-m-d H:i:s", $_SESSION['essayEndTime'] / 1000);
        $session = array(
            'user_id' => $_SESSION['user_id'],
            'start_date' => $start,
            'due_date' => $due_date,
            'selesai' => $_SESSION['essaySelesai'],
        );
        $this->m_soal->input_test_pilgan($session);
    }

    public function cek_test_id_essay()
    {
        $this->load->model('m_soal_essay');
        $id = $_SESSION['user_id'];
        $due_date = date("Y-m-d H:i:s", time());
        //mengembalikan value jika terdapat id
        return $this->m_soal->cek_test_id_essay($id, $due_date);
    }
    public function essay()
    {
        if ($_SESSION['pgSelesai'] == false) {
            redirect('Test');
        }

        $this->load->model('m_soal_essay');
        $_SESSION['test_essay_id'] = $this->m_soal_essay->get_test_essay_id();
        // periksa jika test_id belum dibuat,
        if (!$this->cek_test_id()) {
            $this->session_init_essay();
            $this->array_session_essay();
            $_SESSION['test_essay_id'] = $this->m_soal_essay->get_test_essay_id();
        } else if ($this->m_soal_essay->cek_status_essay($_SESSION['test_essay_id'])) {
            redirect('Test');
        }

        //menyamakan url segment

        $data['soal'] = $this->m_soal_essay->get_data()->row(1);
        $_SESSION['essayIdSoal'] = $data['soal']->id;
        $data['userx'] = $this->session->user;
        $this->load->view('templates/header', $data);
        $this->load->view('v_test_essay', $data);
        $this->load->view('templates/footer');
        $_SESSION['essayNoSoal'] = $this->uri->segment(3);

    }
}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */
