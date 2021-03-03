<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller
{

    public function index(){

        $judul['title'] = 'daftar mahasiswa';
		// form validation
		$this->form_validation->set_rules('nim','NIM','trim|required|numeric|min_length[9]|max_length[10]|is_unique[user.nim]', 
		array('min_length' =>'{field} minimal 9',
			'max_length' => '{field} maksimal 10'));

		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');

		$this->form_validation->set_rules('password','Password','trim|required|min_length[8]|matches[con_pass]',[
			'min_length' => '{field} minimal 8',
			'matches' => '%s tidak sama dengan konfirmasi password'
		]);

		$this->form_validation->set_rules('con_pass','Konfirmasi Password','trim|required|matches[password]',[
			'matches' => '%s tidak sama dengan password'
		]);

		$this->form_validation->set_rules('fakultas', 'Fakultas','trim|required');
		$this->form_validation->set_rules('jurusan', 'Jurusan','trim|required');

		// set pesan menjadi bahasa indonesia
		$this->form_validation->set_message('required','%s masih kosong silahkan isi !');
		$this->form_validation->set_message('numeric','{field} harus berupa number !');
		$this->form_validation->set_message('valid_email','%s email tidak valid !');
		$this->form_validation->set_message('is_unique','%s sudah ada ganti yang lain!');

		if($this->form_validation->run()== FALSE){
            $data['jurusan'] = $this->db->get('user_jurusan')->result_array();
            $data['fakultas'] = $this->db->get('user_fakultas')->result_array();
            $this->load->view('components/header', $judul);
			$this->load->view('components/navbar');
			$this->load->view('login/regis', $data);

		}else{
			$nim            = $this->input->post('nim');
            $nama           = htmlspecialchars($this->input->post('nama', true));
            $email          = htmlspecialchars($this->input->post('email', true));
            $password       = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $fakultas       = $this->input->post('fakultas');
            $jurusan        = $this->input->post('jurusan');
            $aktif          = $this->input->post('aktif');
        

            $data = array(
                
                'nim'           => $nim,
                'nama'          => $nama,
                'email'         => $email,
                'password'      => $password,
                'fakultas'      => $fakultas,
                'jurusan'       => $jurusan,
				'foto'			=> "guest.png",
                'hak_akses'     => "mahasiswa",
                'aktif'         => 1
            
        
            );

            $execute = $this->db->insert('user', $data);
			if($execute){
				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
					Berhasil daftar, Silahkan login!. </div>');
					redirect('login-mahasiswa');

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
				Daftar gagal </div>');
				redirect('login-mahasiswa');

			}
			
		}
		
	}

    
}
