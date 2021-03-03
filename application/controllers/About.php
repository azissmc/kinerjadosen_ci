<?php

    class About extends CI_Controller
    {
        
        public function index(){

            $judul['title'] = "About";

            if($this->session->userdata('nim')){

                $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();
    
                $data['about'] = $this->db->get('kemahasiswaan')->result_array();
                $data['about1'] = $this->db->get('informasi_about')->row_array();
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar',$getMhs);
                $this->load->view('about', $data);

            }else if($this->session->userdata('nidn')){

                $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();
    
                $data['about'] = $this->db->get('kemahasiswaan')->result_array();
                $data['about1'] = $this->db->get('informasi_about')->row_array();
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar_dosen',$getDsn);
                $this->load->view('about', $data);
            }else{
                $data['about'] = $this->db->get('kemahasiswaan')->result_array();
                $data['about1'] = $this->db->get('informasi_about')->row_array();
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar');
                $this->load->view('about', $data);
            }
        }
    }
    