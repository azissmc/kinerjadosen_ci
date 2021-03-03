<?php

    class Dosen extends CI_controller
    {
        public function informasi()
        {
            $judul['title'] = "Informasi";

            if($this->session->userdata('nim')){

                $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();
                $data['informasi'] = $this->db->query('select b.id_informasi, a.nama, b.informasi, b.tanggal, a.foto from user a, informasi b where a.nidn=b.nidn order by tanggal desc')->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar', $getMhs);
                $this->load->view('informasi', $data);

            }else if($this->session->userdata('nidn')){

                $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();
                $data['informasi'] = $this->db->query('select b.id_informasi, a.nama, b.informasi, b.tanggal, a.foto from user a, informasi b where a.nidn=b.nidn order by tanggal desc')->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar_dosen', $getDsn);
                $this->load->view('informasiDosen', $data);
            }else{
                $data['informasi'] = $this->db->query('select b.id_informasi, a.nama, b.informasi, b.tanggal, a.foto from user a, informasi b where a.nidn=b.nidn order by tanggal desc')->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar');
                $this->load->view('informasi', $data);
            }
        }

        public function daftarDosen()
        {
            $judul['title'] = "Daftar Dosen";

            if($this->session->userdata('nim')){

                $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();
                $data['data'] = $this->db->query('SELECT nidn, nama, foto, hak_akses FROM USER WHERE hak_akses="dosen"')->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar', $getMhs);
                $this->load->view('daftar_dosen', $data);

            }else if($this->session->userdata('nidn')){

                $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();
                $data['data'] = $this->db->query('SELECT nidn, nama, foto, hak_akses FROM USER WHERE hak_akses="dosen"')->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar_dosen', $getDsn);
                $this->load->view('daftar_dosen', $data);
            }else{
                $data['data'] = $this->db->query('SELECT nidn, nama, foto, hak_akses FROM USER WHERE hak_akses="dosen"')->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar');
                $this->load->view('daftar_dosen', $data);
            }   
        }

        public function komentar($id)
        {

            $judul['title'] = "Komentar";
            if($this->session->userdata('nim')){
                $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();

                // untuk menampilkan data postingan
                $data['postingan'] = $this->db->query('select u.foto, i.id_informasi, i.informasi,i.tanggal,u.nama from informasi i,user u where i.nidn = u.nidn and i.id_informasi="'.$id.'"')->row_array();
                
                // menampilkan data komentar
                $data['komentar'] = $this->db->query('SELECT a.nama, b.informasi, c.komentar, a.foto, c.tanggal FROM user a, informasi b, komentar c WHERE a.id_user=c.id_user AND b.id_informasi=c.id_informasi AND b.id_informasi="'. $id .'" order by tanggal asc')->result_array();

                $getdata=$this->db->query("select count(id_informasi) as jml from komentar where id_informasi='$id'")->row_array();
                $this->jumlahkomentar=$getdata['jml'];
                
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar', $getMhs);
                $this->load->view('komentar', $data);
            }else if($this->session->userdata('nidn')){

                $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();

                // untuk menampilkan data postingan
                $data['postingan'] = $this->db->query('select u.foto, i.id_informasi, i.informasi,i.tanggal,u.nama from informasi i,user u where i.nidn = u.nidn and i.id_informasi="'.$id.'"')->row_array();
                
                // menampilkan data komentar
                $data['komentar'] = $this->db->query('SELECT a.nama, b.informasi, c.komentar, a.foto, c.tanggal FROM user a, informasi b, komentar c WHERE a.id_user=c.id_user AND b.id_informasi=c.id_informasi AND b.id_informasi="'. $id .'" order by tanggal asc')->result_array();

                $getdata=$this->db->query("select count(id_informasi) as jml from komentar where id_informasi='$id'")->row_array();
                $this->jumlahkomentar=$getdata['jml'];
                
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar_dosen', $getDsn);
                $this->load->view('komentar', $data);

            }else{
                $judul['title'] = "Login";
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar');
                $this->load->view('login/pilihLogin');
            }
            
        }

        public function simpanKomentar($id){
            $judul['title'] = "Komentar";
            if($this->session->userdata('nim')){
                $getId= $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();
                $id_user = $getId['id_user'];
                

                $komentar = $this->input->post('komentar');

                $data = [
                    'id_informasi' => $id,
                    'komentar'      => $komentar,
                    'id_user'       => $id_user

                ];
                $this->db->insert('komentar', $data);
                $rd = 'komentar/'.$id;
                redirect($rd);
    
                
            }else if($this->session->userdata('nidn')){

                $getId= $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();
                $id_user = $getId['id_user'];
                

                $komentar = $this->input->post('komentar');

                $data = [
                    'id_informasi' => $id,
                    'komentar'      => $komentar,
                    'id_user'       => $id_user

                ];
                $this->db->insert('komentar', $data);
                $rd = 'komentar/'.$id;
                redirect($rd);

            }
        }


        public function tambahInformasi(){

            $judul['title'] = "Tambah Informasi";
            $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();

            $this->load->view('components/header', $judul);
            $this->load->view('tambahInformasi');
        }

        public function addInformasi()
        {
            $judul['title'] = "Tambah Informasi";
            
            $get = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();
            $nidn = $get['nidn'];

            $data['nidn']       = $nidn;
            $data['informasi']  = $this->input->post('informasi');

            $this->db->insert('informasi', $data);
            redirect('informasi');
        }
    }
    