<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $data['userx'] = $this->session->user;
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/header');
        $this->load->view('vabout');
        $this->load->view('templates/footer');
    }

    public function faq()
    {
        $this->load->view('templates/header');
        $this->load->view('vfaq');
        $this->load->view('templates/footer');
    }

    public function terms()
    {
        $this->load->view('templates/header');
        $this->load->view('vterms');
        $this->load->view('templates/footer');
    }

    public function privacy()
    {
        $this->load->view('templates/header');
        $this->load->view('vprivacy');
        $this->load->view('templates/footer');
    }

    public function security()
    {
        $this->load->view('templates/header');
        $this->load->view('vsecurity');
        $this->load->view('templates/footer');
    }

}