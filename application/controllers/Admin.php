<?php

    class Admin extends CI_Controller
    {
        public function index()
        {
            $menu['menu'] = 'admin';
            $judul['title'] = "Admin";

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/home');
            $this->load->view('admin_temp/footer');
        }

        public function dataAdmin()
        {
            $menu['menu'] = 'data admin';
            $judul['title'] = "Admin";
            $data['admin'] = $this->db->get('admin')->result_array();

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/dataAdmin', $data);
            $this->load->view('admin_temp/footer');
        }

        public function dataMahasiswa()
        {
            $menu['menu'] = 'data mahasiswa';
            $judul['title'] = "Admin";
            $data['mahasiswa'] = $this->db->get_where('user', ['hak_akses' => 'mahasiswa'])->result_array();

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/dataMahasiswa', $data);
            $this->load->view('admin_temp/footer');
        }

        public function dataDosen()
        {
            $menu['menu'] = 'data dosen';
            $judul['title'] = "Admin";
            $data['dosen'] = $this->db->get_where('user', ['hak_akses' => 'dosen'])->result_array();

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/dataDosen', $data);
            $this->load->view('admin_temp/footer');
        }
    }
    