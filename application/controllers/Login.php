<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function pilihLogin()
    {
        $judul['title'] = "Login";
        $this->load->view('components/header', $judul);
        $this->load->view('login/pilihLogin');
    }

    public function loginMahasiswa()
    {

        $judul['title'] = "Login";

        $data['menu'] = 'login';
		$this->form_validation->set_rules('nim','NIM','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		// tampil tulisan peringatan
		$this->form_validation->set_message('required',' %s Harap di isi');
		


		if($this->form_validation->run() == FALSE){
            $this->load->view('components/header', $judul);
			$this->load->view('login/loginMahasiswa', $data);

		}else{
			$nim 	    = $this->input->post('nim',true);
			$password 	= $this->input->post('password',true);
			// $this->_loginD($nim,$password);

		}
       
    }

    public function loginDosen()
    {

        $judul['title'] = "Login";
        $this->load->view('components/header', $judul);
        $this->load->view('login/loginDosen');
       
    }

    public function loginAdmin()
    {
        $this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		// tampil tulisan peringatan
		$this->form_validation->set_message('required',' %s Harap di isi!');

        if($this->form_validation->run() == FALSE){
            $judul['title'] = "Login | Admin";
            $this->load->view('components/header', $judul);
            $this->load->view('login/loginAdmin');

		}else{
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			$this->loginA($username,$password);

		}
        
    }


    // =========================================================================
    // FUNCTION UNTUK LOGINYA
    // =========================================================================
    function loginA($username,$password){
		$admin = $this->db->get_where('admin',['username' => $username])->row_array();
		if($admin){
			if($password == $admin['password']){
				$data = [
					'username' => $admin['username'],
				];
				$this->session->set_userdata($data);
				
				redirect('admin');

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password salah!</div>');
				redirect('login-admin');
			}

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Username dan Password belum terdaftar!</div>');
			redirect('login-admin');
		}

	}
}
