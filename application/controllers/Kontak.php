<?php

    class Kontak extends CI_Controller
    {
        
        public function index()
        {
            $judul['title'] = "Kontak";
            $data['kontak'] = $this->db->get('kontak')->result_array();
            $this->load->view('components/header', $judul);
            $this->load->view('kontak', $data);
        }

        public function kirim()
        {
            $judul['title'] = "Kontak";
            $data['kontak'] = $this->db->get('kontak')->result_array();

            $this->form_validation->set_rules('name','nama','trim|required');
            $this->form_validation->set_rules('email','email','trim|required');
            $this->form_validation->set_rules('subject','subject','trim|required');
            $this->form_validation->set_rules('message','message','trim|required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('components/header', $judul);
                $this->load->view('kontak', $data);
            }else{
                
            }
        }
    }
    