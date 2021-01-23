<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Finish_essay
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

class Finish_essay extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // 
    $this->load->model('m_soal_essay');
    $id = $_SESSION['test_essay_id'];
    $data['essay'] = $this->m_soal_essay->get_essay($id);
    $idProfil = $data['essay']->user_id;
    $data['profil'] = $this->m_soal_essay->get_user($idProfil);
    
    $data['jawaban'] = $this->input->post('jawabanEssay');
    $this->m_soal_essay->update_jawaban_essay($id,$data['jawaban']);


    $this->essay_selesai();
    $data['userx'] = $this->session->user;
		$this->load->view('templates/header',$data);
		$this->load->view('v_hasil_essay');
    $this->load->view('templates/footer');

  }


  public function essay_selesai()
  {
    date_default_timezone_set('Asia/Jakarta');
    $status = $_SESSION['essaySelesai'] = true;
    $now = round(microtime(true));
    $now = date("Y-m-d H:i:s",$now); 
    $id = $_SESSION['test_essay_id'];
    $nilai = 0;
    $this->m_soal_essay->update_status_test_essay($id,$status, $now, $nilai);
  }


}


/* End of file Finish_essay.php */
/* Location: ./application/controllers/Finish_essay.php */