<?php 

    class Profil extends CI_Controller
    {

        public function __construct()
        {
            parent:: __construct();
            $this->load->model('Mprofil');
        }
        
        public function profilMhs()
        {
            $judul['title'] = "Profil";
            $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();
            

            $this->load->view('components/header', $judul);
            $this->load->view('components/navbar', $getMhs);
            $this->load->view('profilMhs', $getMhs);
        }


        public function ubahFotoMhs()
        {
            $judul['title'] = "Ubah Foto";
            $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();

            $this->load->view('components/header', $judul);
            
            $this->load->view('ubahFotoMhs', $getMhs);
        }

        public function ubahMhs($id)
        {
            $judul['title'] = "Profil";
            $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();

            $this->form_validation->set_rules('nama','Nama','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('email','Email','trim|required|is_unique[admin.password]',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('semester','Semester','trim|required',array('required' => '%s tidak boleh kosong'));

            if($this->form_validation->run()== FALSE){

                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar', $getMhs);
                $this->load->view('profilMhs', $getMhs);
            }else{
                $data['nama']       = $this->input->post('nama');
                $data['email']      = $this->input->post('email');
                $data['semester']   = $this->input->post('semester');

                $where = array(
                    'id_user' => $id
    
                );

                $this->Mprofil->ubahMhs($where, $data, 'user');
                redirect('profilmhs');
            }
        }

        public function ubahFoto1()
        {
            $getMhs = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();

            $id = $getMhs['id_user'];
            // ambil data foto
            if (!empty($_FILES['foto']['name'])) {
                $foto = $this->_uploadImage();
                $this->hapus_file($this->input->post('gambar_lama'));
            } else {
                $foto = $this->input->post('gambar_lama');
            }

            $data = [
                'foto'          => $foto

            ];

            $where = [
                'id_user' => $id
            ];

            $this->Mprofil->ubahFoto1($where, $data, 'user');
            redirect('profilmhs');

        }


        // =============================================================================================
        // PROFIL DOSEN
        // =============================================================================================
        public function profilDsn()
        {
            $judul['title'] = "Profil";
            $getDsn['dsn']  = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();
            

            $this->load->view('components/header', $judul);
            $this->load->view('components/navbar_dosen', $getDsn);
            $this->load->view('profilDsn', $getDsn);
        }

        public function ubahFotoDsn()
        {
            $judul['title'] = "Ubah Foto";
            $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();

            $this->load->view('components/header', $judul);
            
            $this->load->view('ubahFotoDsn', $getDsn);
        }

        public function ubahDsn($id)
        {
            $judul['title'] = "Profil";
            $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();

            $this->form_validation->set_rules('nama','Nama','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('email','Email','trim|required|is_unique[admin.password]',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('kuotes','Kuotes','trim|required',array('required' => '%s tidak boleh kosong'));

            if($this->form_validation->run()== FALSE){

                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar_dosen', $getDsn);
                $this->load->view('profilMhs', $getDsn);
            }else{
                $data['nama']       = $this->input->post('nama');
                $data['email']      = $this->input->post('email');
                $data['kuotes']     = $this->input->post('kuotes');

                $where = array(
                    'id_user' => $id
    
                );

                $this->Mprofil->ubahMhs($where, $data, 'user');
                redirect('profildsn');
            }
        }

        public function ubahFoto2()
        {
            $getDsn = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();

            $id = $getDsn['id_user'];
            // ambil data foto
            if (!empty($_FILES['foto']['name'])) {
                $foto = $this->_uploadImage();
                $this->hapus_file($this->input->post('gambar_lama'));
            } else {
                $foto = $this->input->post('gambar_lama');
            }

            $data = [
                'foto'          => $foto

            ];

            $where = [
                'id_user' => $id
            ];

            $this->Mprofil->ubahFoto2($where, $data, 'user');
            redirect('profildsn');

        }





        // ================================================================================
        // FUNCTION UPLOAD FOTO
        // ================================================================================

        private function _uploadImage()
		{
		
		    $config['upload_path']          = './gambar/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['max_size']             = 99999999999;
		    

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('foto')) {
		        return $this->upload->data("file_name");
		    }
        }

        function hapus_file($nama)
        {   
            return unlink($_SERVER['DOCUMENT_ROOT']."/kinerjadosen_ci/gambar/".$nama);
        }
    }

    
?>