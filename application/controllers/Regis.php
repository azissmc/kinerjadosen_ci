<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller
{

    public function index()
    {

        $judul['title'] = "Register";
        $data['menu'] = 'register';
        // form validation
        $this->form_validation->set_rules('nim','NIM','trim|required|is_unique[user.nim]');
        
        $this->form_validation->set_rules('nama','Nama','trim|required');
        
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');

        
		$this->form_validation->set_rules('password','Password','trim|required|min_length[8]', 
		array('min_length' => '{field} minimal 8'));
        
		$this->form_validation->set_rules('con_pass','Konfirmasi Password','trim|required|matches[password]');
		$this->form_validation->set_rules('id_fakultas','Fakultas','trim|required');
		$this->form_validation->set_rules('id_jurusan','Jurusan','trim|required');
        
		// set pesan menjadi bahasa indonesia
		$this->form_validation->set_message('required','%s masih kosong silahkan isi !');
		$this->form_validation->set_message('numeric','{field} harus berupa number !');
		$this->form_validation->set_message('valid_email','%s email tidak valid !');
		$this->form_validation->set_message('matches','%s tidak sama dengan password !');
		$this->form_validation->set_message('is_unique','%s sudah ada ganti yang lain!');

		if($this->form_validation->run()== FALSE){
            $data['fakultas'] = $this->db->get('user_fakultas')->result_array();
            $data['jurusan'] = $this->db->get('user_jurusan')->result_array();

            $this->load->view('components/header', $judul);
			$this->load->view('login/regis', $data);
		}else{

            $nim       = $this->input->post('nim');
            $nama      = $this->input->post('nama');
			$email     = htmlspecialchars($this->input->post('email', true));
            $fakultas  = $this->input->post('id_fakultas');
            $jurusan   = $this->input->post('id_jurusan');
            $password  = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

            $data = array(
                
                'nim'           => $nim,
                'nama'          => $nama,
                'email'         => $email,
                'id_fakultas'   => $fakultas,
                'id_jurusan'    => $jurusan,
                'password'      => $password,
                'hak_akses'     => "mahasiswa",
                'aktif'         => 0
                
                );

                $this->db->insert('user', $data);
                redirect('login-mahasiswa');

                '<script>
                    swal("Berhasil", "Silahkan login!", "succes");
                </script>'
    
        }

    }

    public function daftar()
    {
        

    }
}
