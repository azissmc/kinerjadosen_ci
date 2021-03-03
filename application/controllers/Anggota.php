<?php

    class Anggota extends CI_Controller
    {
        public function index()
        {
            $judul['title'] = "Anggota";

            if($this->session->userdata('nim')){

                $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();
                $getdata = $this->db->query('select count(id_user) as jml from user')->row_array();
                $this->jumlahanggota = $getdata['jml'];
                
                $data['data'] = $this->db->query('select nama, foto, hak_akses from user order by nama asc')->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar', $getMhs);
                $this->load->view('anggota',$data);

            }else if($this->session->userdata('nidn')){

                $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();
                $getdata = $this->db->query('select count(id_user) as jml from user')->row_array();
                $this->jumlahanggota = $getdata['jml'];
                
                $data['data'] = $this->db->query('select nama, foto, hak_akses from user order by nama asc')->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar_dosen', $getDsn);
                $this->load->view('anggota',$data);

            }else{
                $getdata = $this->db->query('select count(id_user) as jml from user')->row_array();
                $this->jumlahanggota = $getdata['jml'];
                
                $data['data'] = $this->db->query('select nama, foto, hak_akses from user order by nama asc')->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar');
                $this->load->view('anggota',$data);
            }
        }
    }
    