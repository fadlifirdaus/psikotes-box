<?php
class m_soal_essay extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('soal_essay');
    }
    
    function data($number,$offset){
		return $query = $this->db->get('soal_essay',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('soal_essay')->num_rows();
    }
    function cek_jawaban($id)
    {
        $this->db->select('jawaban'); 
        $this->db->from('soal_essay');   
        $this->db->where('id', $id);
        return $this->db->get()->row()->jawaban;
    }
    function input_test_essay($data)
    {
        $this->db->insert('test_essay',$data);
    }

    // cek jika user telah embuat id_test dengan waktu yang masih aktif( belum masuk due date)
    function cek_test_id_essay($id,$now)
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->select('*');
        $this->db->from('test_essay');
        $this->db->where('user_id', $id);
        $this->db->where('due_date >', $now);
        // $this->db->where('selesai', 0);
        return $this->db->get()->row();
    }
    function cek_status_essay($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->select('*');
        $this->db->from('test_essay');
        $this->db->where('id', $id);
        $this->db->where('selesai', 1);
        return $this->db->get()->row();
    }
    function get_essay($id)
    {
        $this->db->select('*');
        $this->db->from('test_essay');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    function get_user($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    
    function get_test_essay_id()
    {
        return $this->db->select('id')->order_by('id',"desc")->limit(1)->get('test_essay')->row()->id;
    }

    function update_jawaban_essay($id,$jawaban)
    {
        
        $this->db->set('jawaban', $jawaban);
        $this->db->where('id', $id);
        $this->db->update('test_essay');
    }
    
    function hitung_nilai($id)
    {
        $this->db->select('
            jawaban1,
            jawaban2,
            jawaban3,
            jawaban4,
            jawaban5,
            jawaban6,
            jawaban7,
            jawaban8,
            jawaban9,
            jawaban10
            ');
        $this->db->from('test_essay');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    function update_status_test_essay($id,$status,$endTime, $nilai)
    {
        
        $this->db->set('selesai', $status);
        $this->db->set('end_date', $endTime);
        $this->db->set('nilai', $nilai);
        $this->db->where('id', $id);
        $this->db->update('test_essay');
    }
}