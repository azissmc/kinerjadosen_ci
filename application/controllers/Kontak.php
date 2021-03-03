<?php

    class Kontak extends CI_Controller
    {
        
        public function index()
        {
            $judul['title'] = "Kontak";

            if($this->session->userdata('nim')){

                $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();

                $data['kontak'] = $this->db->get('kontak')->result_array();
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar', $getMhs);
                $this->load->view('kontak', $data);

            }else if($this->session->userdata('nidn')){

                $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();

                $data['kontak'] = $this->db->get('kontak')->result_array();
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar_dosen', $getDsn);
                $this->load->view('kontak', $data);
            }else{
                $data['kontak'] = $this->db->get('kontak')->result_array();
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar');
                $this->load->view('kontak', $data);
            }
            
        }

        public function kirim()
        {
            $judul['title'] = "Kontak";
            $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();
            $data['kontak'] = $this->db->get('kontak')->result_array();

            $this->form_validation->set_rules('name','nama','trim|required');
            $this->form_validation->set_rules('email','email','trim|required');
            $this->form_validation->set_rules('subject','subject','trim|required');
            $this->form_validation->set_rules('message','message','trim|required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar', $getMhs);
                $this->load->view('kontak', $data);
            }else{
                
            }
        }
    }
    