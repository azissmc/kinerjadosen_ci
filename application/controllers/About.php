<?php

    class About extends CI_Controller
    {
        
        public function index(){

            $judul['title'] = "About";

            $data['about'] = $this->db->get('kemahasiswaan')->result_array();
            $data['about1'] = $this->db->get('informasi_about')->row_array();
            $this->load->view('components/header', $judul);
            $this->load->view('about', $data);
        }
    }
    