<?php

    class Kontak extends CI_Controller
    {
        
        public function index()
        {
            $judul['title'] = "Kontak";
            $this->load->view('components/header', $judul);
            $this->load->view('kontak');
        }

        public function kirim()
        {
            $judul['title'] = "Kontak";

            $this->form_validation->set_rules('name','nama','trim|required');
            $this->form_validation->set_rules('email','email','trim|required');
            $this->form_validation->set_rules('subject','subject','trim|required');
            $this->form_validation->set_rules('message','message','trim|required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('components/header', $judul);
                $this->load->view('kontak');
            }else{
                
            }
        }
    }
    