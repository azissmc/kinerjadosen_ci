<?php

    class Admin extends CI_Controller
    {

        function __construct()
        {
            parent:: __construct();
            $this->load->model('Madmin');
        }

        public function index()
        {
            $menu['menu'] = 'admin';
            $judul['title'] = "Admin";

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/home');
            $this->load->view('admin_temp/footer');
        }

        // ==================================================================
        // DATA ADMIN
        // ==================================================================
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

        public function tambahAdmin()
        {
            $this->form_validation->set_rules('username','Username','trim|required|is_unique[admin.username]',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('password','Password','trim|required|is_unique[admin.password]',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');

            if($this->form_validation->run()== FALSE){

                $menu['menu'] = 'data admin';
                $judul['title'] = "Tambah Data Admin";
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/tambahAdmin');
                $this->load->view('admin_temp/footer');

            }else{
                $data['username'] = $this->input->post('username');
                $data['password'] = $this->input->post('password');

                $this->db->insert('admin', $data);
                redirect('data-admin');
            }
        }

        public function ubahAdmin($id)
        {
            $this->form_validation->set_rules('username','Username','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('password','Password','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');
            if($this->form_validation->run()== FALSE){
                
                $menu['menu'] = 'data admin';
                $judul['title'] = "Ubah Data Admin";
                $data['admin'] = $this->db->get_where('admin', ['id' => $id])->row_array();
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/ubahAdmin', $data);
                $this->load->view('admin_temp/footer');
            }else{
                $username 	= $this->input->post('username');
                $password 	= $this->input->post('password');
    
    
                $data = array(
                    'id' 		=> $id,
                    'username' 	=> $username,
                    'password' 	=> $password
                );
    
                $where = array(
                    'id' => $id
    
                );
    
                $this->Madmin->ubahAdmin($where, $data, 'admin');
                redirect('data-admin');   
            }
        }

        // public function ubahDataAdmin($id)
        // {
        //     $this->form_validation->set_rules('username','Username','trim|is_unique[admin.username]',array('required' => '%s tidak boleh kosong'));
        //     $this->form_validation->set_rules('password','Password','trim|is_unique[admin.password]',array('required' => '%s tidak boleh kosong'));
    
        //     $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');
        //     if($this->form_validation->run()== FALSE){
                
        //     }else{

        //         $username 	= $this->input->post('username');
        //         $password 	= $this->input->post('password');
    
    
        //         $data = array(
        //             'id' 		=> $id,
        //             'username' 	=> $username,
        //             'password' 	=> $password
        //         );
    
        //         $where = array(
        //             'id' => $id
    
        //         );
    
        //         $this->Madmin->editA($where, $data, 'admin');
        //         redirect('Admin');
        //     }
        // }


        // ===============================================================================
        // DATA MAHASISWA
        // ===============================================================================
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


        // =========================================================================================
        // DATA DOSEN
        // =========================================================================================
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

        public function tambahDosen()
        {
            $menu['menu'] = 'data dosen';
            $judul['title'] = "Tambah Data Dosen";
            

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/tambahDosen');
            $this->load->view('admin_temp/footer');
        }

        // =========================================================================================
        // DATA REKTORAT
        // =========================================================================================
        public function dataRektorat()
        {
            $menu['menu'] = 'data rektorat';
            $judul['title'] = "Admin";
            $data['rektorat'] = $this->db->get('rektorat')->result_array();

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/dataRektorat', $data);
            $this->load->view('admin_temp/footer');
        }
    }
    