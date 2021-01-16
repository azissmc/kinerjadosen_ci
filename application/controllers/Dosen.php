<?php

    class Dosen extends CI_controller
    {
        public function informasi()
        {
            $judul['title'] = "Informasi";
            $data['informasi'] = $this->db->query('select b.id_informasi, a.nama, b.informasi, b.tanggal, a.foto from user a, informasi b where a.nidn=b.nidn order by tanggal desc')->result_array();

            $this->load->view('components/header', $judul);
            $this->load->view('informasi', $data);
        }

        public function daftarDosen()
        {
            $judul['title'] = "Daftar Dosen";
            $data['data'] = $this->db->query('SELECT nidn, nama, foto, hak_akses FROM USER WHERE hak_akses="dosen"')->result_array();

            $this->load->view('components/header', $judul);
            $this->load->view('daftar_dosen', $data);
        }

        public function komentar($id)
        {
            $judul['title'] = "Komentar";

            // untuk menampilkan data postingan
            $data['postingan'] = $this->db->query('select i.id_informasi, i.informasi,i.tanggal,u.nama from informasi i,user u where i.nidn = u.nidn and i.id_informasi="'.$id.'"')->row_array();
            
             // menampilkan data komentar
            $data['komentar'] = $this->db->query('SELECT a.nama, b.informasi, c.komentar, a.foto, c.tanggal FROM user a, informasi b, komentar c WHERE a.id_user=c.id_user AND b.id_informasi=c.id_informasi AND b.id_informasi="'. $id .'" order by tanggal asc')->result_array();

            $getdata=$this->db->query("select count(id_informasi) as jml from komentar where id_informasi='$id'")->row_array();
			$this->jumlahkomentar=$getdata['jml'];
			
 
            $this->load->view('components/header', $judul);
            $this->load->view('komentar', $data);
        }
    }
    