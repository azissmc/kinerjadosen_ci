<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['menu'] = 'home';
        $data['rektorat'] = $this->db->order_by('jabatan', 'asc')->get('rektorat')->result_array();
        // get jumlah dosen
		$dataDosen = $this->db->query('select count(id_user) as jml from user where hak_akses="dosen"')->row_array();
        $this->jumlahdosen = $dataDosen['jml'];

        // get jumlah mahasiswa
		$dataDosen = $this->db->query('select count(id_user) as jml from user where hak_akses="mahasiswa"')->row_array();
        $this->jumlahmhs = $dataDosen['jml'];
        
        // untuk menampilkan jumlah anggota
		$getdata = $this->db->query('select count(id_user) as jml from user')->row_array();
        $this->jumlahanggota = $getdata['jml'];
        

        // menampilkan berita
        $data['berita'] = $this->db->order_by('created_date', 'desc')->limit(6)->get('berita')->result_array();

        // menampilkan informasi kemahasiswaan
        $data['info'] = $this->db->get('informasi_home')->row_array();

        $judul['title'] = "Home";
        $this->load->view('components/header', $judul);
        $this->load->view('home', $data);
       
    }
}
