<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->helper('url');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['user']     = $this->m_admin()->result();
        $data['uSer'] = $this->db->get('user')->result_array();

        $this->load->view('templates/headerr', $data);
        $this->load->view('admin/vindex', $data);
        $this->load->view('templates/footer');
    }

    public function user()
    {
        $data['title'] = 'User Management';
        $this->load->model('m_admin', 'adm');

        // Load Library pagination
        $this->load->library('pagination');

        // Get Keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // Config
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('user');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        // $config['total_rows']     = $this->adm->countAll();
        // $config['total_rows'] = 1004;
        $config['per_page'] = 10;

        // Initilize Pagination
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        // $data['users']    = $this->adm->tampil_data();
        // $data['users']    = $this->adm->tampil(10, 0);
        $data['users'] = $this->adm->tampil($config['per_page'], $data['start'], $data['keyword']);

        // $data['user']     = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['uSer']    = $this->db->get('user')->result_array();
        $data['userx'] = $this->session->user;
        $this->load->view('templates/header', $data);
        $this->load->view('admin/vuser', $data);
        $this->load->view('templates/footer');
    }

    public function menu()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerr', $data);
            $this->load->view('admin/vmenu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New Menu Added! </div>');
            redirect('admin/menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerr', $data);
            $this->load->view('admin/vsubmenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New Menu Added! </div>');
            redirect('admin/submenu');
        }
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/headerr', $data);
        $this->load->view('admin/vrole', $data);
        $this->load->view('templates/footer');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/headerr', $data);
        $this->load->view('admin/vroleaccess', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id,
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Access changed! </div>');
    }

    public function tambah()
    {
        $this->load->view('templates/headerr', $data);
        $this->load->view('admin/vuser', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $image = $_FILES['image'];

        if ($image = '') {} else {
            $config['upload_path'] = './assets/img/profile/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "Upload Failed!";die();
            } else {
                $image = $this->upload->data('file_name');
            }
        }

        $data = array('name' => $name,
            'email' => $email,
            'image' => $image,
        );

        $this->m_admin->input_data($data, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			 Data berhasil ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
        redirect('admin/index');

    }

    public function hapus($id)
    {
        $where = array('id' => $id);

        $this->m_admin->hapus_data($where, 'user');
        $this->session->set_flashdata('flash', 'Dihapus');

        redirect('admin/user');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Profile';

        $where = array('id' => $id);
        // $data['user']     = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->m_admin->edit_data($where, 'user')->result();
        // $data['uSer']    = $this->db->get('user')->result_array();

        $data['userx'] = $this->session->user;
        $this->load->view('templates/header', $data);
        $this->load->view('admin/vedit', $data);
        $this->load->view('templates/footer');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your profile has been update! </div>');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $image = $this->input->post('image');

        $data = array('name' => $name,
            'email' => $email,
            'image' => $image,
        );

        $where = array('id' => $id);

        $this->m_admin->update_data($where, $data, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your profile has been update! </div>');
        redirect('admin/user');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Profile';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['uSer'] = $this->db->get('user')->result_array();

        $detail = $this->m_admin->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/headerr', $data);
        $this->load->view('admin/vdetail', $data);
        $this->load->view('templates/footer');
    }

    public function cetak()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->m_admin->tampil_data()->result();
        $this->load->view('admin/vprint', $data);
    }

    // public function search(){
    //     $data['title']     = 'User Management';

    //     if ($this->input->post('submit')) {
    //         $data['keyword'] = $this->input->post('keyword');
    //     } else{
    //         $data['keyword'] = null;
    //     }

    //     $data['user'] = $this->m_admin->get_keyword($keyword);

    //     $data['user']     = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['uSer']    = $this->db->get('user')->result_array();

    //     // $keyword = $this->input->post('keyword');
    //     // $data['user'] = $this->m_admin->get_keyword($keyword);

    //     $this->load->view('templates/header',$data);
    //     $this->load->view('admin/vuser',$data);
    //     $this->load->view('templates/footer');
    // }
}