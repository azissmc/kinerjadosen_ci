<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['menu'] = 'home';
        $judul['title'] = "Home";
        

        if($this->session->userdata('nim')){

            $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();

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
    
           
            $this->load->view('components/header', $judul);
            $this->load->view('components/navbar', $getMhs);
            $this->load->view('home', $data);
        }else if($this->session->userdata('nidn')){

            $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();

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
    
           
            $this->load->view('components/header', $judul);
            $this->load->view('components/navbar_dosen', $getDsn);
            $this->load->view('home', $data);

        }else{

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
            $this->load->view('components/header', $judul);
            $this->load->view('components/navbar');
            $this->load->view('home', $data);
        }
 
    }
}
