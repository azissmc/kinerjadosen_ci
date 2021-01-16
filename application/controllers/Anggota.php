<?php

    class Anggota extends CI_Controller
    {
        public function index()
        {
            $judul['title'] = "Anggota";

            $getdata = $this->db->query('select count(id_user) as jml from user')->row_array();
            $this->jumlahanggota = $getdata['jml'];
            
            $data['data'] = $this->db->query('select nama, foto, hak_akses from user order by nama asc')->result_array();

            $this->load->view('components/header', $judul);
            $this->load->view('anggota',$data);
        }
    }
    