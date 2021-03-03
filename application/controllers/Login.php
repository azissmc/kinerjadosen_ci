<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function pilihLogin()
    {
        $judul['title'] = "Login";
        $this->load->view('components/header', $judul);
        $this->load->view('components/navbar');
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
			$this->load->view('components/navbar');
			$this->load->view('login/loginMahasiswa', $data);

		}else{
			$nim 	    = $this->input->post('nim',true);
			$password 	= $this->input->post('password',true);
			$this->_loginM($nim,$password);

		}
       
    }

    public function loginDosen()
    {

		$judul['title'] = "Login";

        $data['menu'] = 'login';
		$this->form_validation->set_rules('nidn','NIDN','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		// tampil tulisan peringatan
		$this->form_validation->set_message('required',' %s Harap di isi');
		


		if($this->form_validation->run() == FALSE){

			$this->load->view('components/header', $judul);
			$this->load->view('components/navbar');
			$this->load->view('login/loginDosen');

		}else{
			$nidn 	    = $this->input->post('nidn',true);
			$password 	= $this->input->post('password',true);
			$this->_loginD($nidn,$password);

		}
        
       
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

    function _loginM($nim,$password){
		$user = $this->db->get_where('user',['nim' => $nim])->row_array();
		if($user){
			// jika usernya aktif
			if($user['aktif'] == 1){
				// cek password
				if($password == $user['password']){
					$data = [
						'nim' => $user['nim'],
				
					];
					$this->session->set_userdata($data);
					redirect('home');
	
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password salah!</div>');
					redirect('login-mahasiswa');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Akun belum di aktifkan!</div>');
				redirect('login-mahasiswa');
			}

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">NIM atau password tidak terdaftar!</div>');
			redirect('login-mahasiswa');
		}

	}

	function _loginD($nidn,$password){
		$user = $this->db->get_where('user',['nidn' => $nidn])->row_array();
		if($user){
			// jika usernya aktif
			if($user['aktif'] == 1){
				// cek password
				if($password == $user['password']){
					$data = [
						'nidn' => $user['nidn'],
				
					];
					$this->session->set_userdata($data);
					redirect('home');
	
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password salah!</div>');
					redirect('login-dosen');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Akun belum di aktifkan!</div>');
				redirect('login-dosen');
			}

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">NIM atau password tidak terdaftar!</div>');
			redirect('login-dosen');
		}

	}
	// =============================================================================================
	// Logout
	// ==============================================================================================
	public function LogoutAdmin(){
		$this->session->sess_destroy();
		redirect('login-admin');
	}
	public function Logout(){
		$this->session->sess_destroy();
		redirect('pilih-login');
	}
	
}
