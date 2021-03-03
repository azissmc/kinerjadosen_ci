<?php

    class Admin extends CI_Controller
    {

        function __construct()
        {
            parent:: __construct();
            $this->load->model('Madmin');
            if ( ! $this->session->userdata('username'))
 	   	    { 
                // Allow some methods?
                $allowed = array(
                    
                );
                if ( ! in_array($this->router->fetch_method(), $allowed))
                {
                    redirect('login-admin');
			    }
 	   	    }
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

                $exe = $this->db->insert('admin', $data);
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil tambah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('data-admin');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal tambah data!</div>');
                    redirect('data-admin');
                }
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
    
                $exe = $this->Madmin->ubahAdmin($where, $data, 'admin');
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil edit data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
				    redirect('data-admin');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal edit data!</div>');
				    redirect('data-admin');
                }

                   
            }
        }

        public function hapusAdmin($id){
            $menu['menu'] = 'data admin';
            $judul['title'] = "Hapus Data Admin";

            $where = array('id' => $id);
            $exe = $this->Madmin->hapusAdmin($where, 'admin');

            if($exe){
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil hapus data!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('data-admin');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal hapus data!</div>');
                redirect('data-admin');
            }
        }
        


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

        public function detailMahasiswa($id)
        {
            $menu['menu'] = 'data mahasiswa';
            $judul['title'] = "Admin";
            $data['mahasiswa'] = $this->db->get_where('user', ['id_user' => $id])->row_array();

            
            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/detailMahasiswa', $data);
            $this->load->view('admin_temp/footer');
        }

        public function tambahMahasiswa()
        {
            $this->form_validation->set_rules('nim','NIM','trim|required|is_unique[user.nim]',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('nama','Nama','trim|required|is_unique[user.nama]',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');

            if($this->form_validation->run()== FALSE){

                $menu['menu'] = 'data mahasiswa';
                $judul['title'] = "Tambah Data Mahasiswa";
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/tambahMahasiswa');
                $this->load->view('admin_temp/footer');

            }else{
                $data['nim']        = $this->input->post('nim');
                $data['nama']       = $this->input->post('nama');
                $data['hak_akses']  = "mahasiswa";
                $data['aktif']      = 1;

                $exe = $this->db->insert('user', $data);
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil tambah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('data-mahasiswa');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal tambah data!</div>');
                    redirect('data-mahasiswa');
                }
            }
        }

        public function ubahMahasiswa($id)
        {
            $this->form_validation->set_rules('nim','nim','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('nama','Nama','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');
            if($this->form_validation->run()== FALSE){
                
                $menu['menu'] = 'data mahasiswa';
                $judul['title'] = "Ubah Data Mahasiswa";
                $data['mahasiswa'] = $this->db->get_where('user', ['id_user' => $id])->row_array();
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/ubahMahasiswa', $data);
                $this->load->view('admin_temp/footer');
            }else{
                $nim 	= $this->input->post('nim');
                $nama 	= $this->input->post('nama');
    
    
                $data = array(
                    'id_user'   => $id,
                    'nim' 	    => $nim,
                    'nama' 	    => $nama
                );
    
                $where = array(
                    'id_user' => $id
    
                );
    
                $exe = $this->Madmin->ubahMahasiswa($where, $data, 'user');
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil edit data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
				    redirect('data-mahasiswa');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal edit data!</div>');
				    redirect('data-mahasiswa');
                }

                   
            }
        }

        public function hapusMahasiswa($id){
            $menu['menu'] = 'data mahasiswa';
            $judul['title'] = "Hapus Data Mahasiswa";

            $where = array('id_user' => $id);
            $exe = $this->Madmin->hapusMahasiswa($where, 'user');

            if($exe){
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil hapus data!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('data-mahasiswa');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal hapus data!</div>');
                redirect('data-mahasiswa');
            }
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

        public function detailDosen($id)
        {
            $menu['menu'] = 'data dosen';
            $judul['title'] = "Admin";
            $data['dosen'] = $this->db->get_where('user', ['id_user' => $id])->row_array();

            
            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/detailDosen', $data);
            $this->load->view('admin_temp/footer');
        }

        public function tambahDosen()
        {
            $this->form_validation->set_rules('nidn','NIDN','trim|required|is_unique[user.nidn]',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('nama','Nama','trim|required|is_unique[user.nama]',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('password','Password','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');

            if($this->form_validation->run()== FALSE){

                $menu['menu'] = 'data dosen';
                $judul['title'] = "Tambah Data Dosen";
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/tambahDosen');
                $this->load->view('admin_temp/footer');

            }else{
                $data['nidn']       = $this->input->post('nidn');
                $data['nama']       = $this->input->post('nama');
                $data['password']   = $this->input->post('password');
                $data['hak_akses']  = "dosen";
                $data['aktif']      = 1;

                $exe = $this->db->insert('user', $data);
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil tambah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('data-dosen');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal tambah data!</div>');
                    redirect('data-dosen');
                }
            }
        }


        public function ubahDosen($id)
        {
            $this->form_validation->set_rules('nidn','NIDN','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('nama','Nama','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('password','Password','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');
            if($this->form_validation->run()== FALSE){
                
                $menu['menu'] = 'data dosen';
                $judul['title'] = "Ubah Data Dosen";
                $data['dosen'] = $this->db->get_where('user', ['id_user' => $id])->row_array();
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/ubahDosen', $data);
                $this->load->view('admin_temp/footer');
            }else{
                $nidn 	    = $this->input->post('nidn');
                $nama 	    = $this->input->post('nama');
                $password 	= $this->input->post('password');
    
    
                $data = array(
                    'id_user'       => $id,
                    'nidn' 	        => $nidn,
                    'nama' 	        => $nama,
                    'password' 	    => $password
                );
    
                $where = array(
                    'id_user' => $id
    
                );
    
                $exe = $this->Madmin->ubahDosen($where, $data, 'user');
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil edit data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
				    redirect('data-dosen');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal edit data!</div>');
				    redirect('data-dosen');
                }

                   
            }
        }
        public function hapusDosen($id){
            $menu['menu'] = 'data dosen';
            $judul['title'] = "Hapus Data Dosen";

            $where = array('id_user' => $id);
            $exe = $this->Madmin->hapusDosen($where, 'user');

            if($exe){
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil hapus data!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('data-dosen');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal hapus data!</div>');
                redirect('data-dosen');
            }
        }

        // =========================================================================================
        // DATA KATEGORI REKTORAT
        // =========================================================================================

        public function kategoriRektorat()
        {
            $menu['menu'] = 'kategori rektorat';
            $judul['title'] = "Admin";
            $data['rektorat'] = $this->db->get('kategori_rektorat')->result_array();

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/kategoriRektorat', $data);
            $this->load->view('admin_temp/footer');
        }

        public function tambahKategoriRektorat()
        {
            $this->form_validation->set_rules('kategori_nama','Nama','trim|required|is_unique[kategori_rektorat.kategori_nama]',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');

            if($this->form_validation->run()== FALSE){

                $menu['menu']       = 'kategori rektorat';
                $judul['title']     = "Tambah Kategori Rektorat";

                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/tambahKategoriRektorat');
                $this->load->view('admin_temp/footer');

            }else{
                $data['kategori_nama']  = $this->input->post('kategori_nama');
                
                

                $exe = $this->db->insert('kategori_rektorat', $data);
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil tambah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('kategori-rektorat');
                    }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal tambah data!</div>');
                    redirect('kategori-rektorat');
                }
            }
        }

        public function ubahKategoriRektorat($id)
        {
            $this->form_validation->set_rules('kategori_nama','Kategori Nama','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');
            if($this->form_validation->run()== FALSE){

                $menu['menu']       = 'kategori rektorat';
                $judul['title']     = "Ubah Kategori Rektorat";
                $data['kr']         = $this->db->get_where('kategori_rektorat',['id' =>$id])->row_array();

                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/ubahKategoriRektorat', $data);
                $this->load->view('admin_temp/footer');

            }else{
                $kategori_nama = $this->input->post('kategori_nama');
                $data = [ 
                    'kategori_nama' => $kategori_nama
                ];

                $where = [
                    'id' => $id
                ];

                $exe = $this->Madmin->ubahKategoriRektorat($where, $data, 'kategori_rektorat');
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil ubah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('kategori-rektorat');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal ubah data!</div>');
                    redirect('kategori-rektorat');
                }
            }
        }

        public function hapusKategoriRektorat($id){
            $menu['menu'] = 'kategori rektorat';
            $judul['title'] = "Hapus Kategori Rektorat";

            $where = array('id' => $id);
            $exe = $this->Madmin->hapusKategoriRektorat($where, 'kategori_rektorat');

            if($exe){
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil hapus data!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('kategori-rektorat');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal hapus data!</div>');
                redirect('kategori-rektorat');
            }
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

        public function detailRektorat($id)
        {
            $menu['menu'] = 'data rektorat';
            $judul['title'] = "Admin";
            $data['rt'] = $this->db->get_where('rektorat', ['id_rektorat' => $id])->row_array();

            
            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/detailRektorat', $data);
            $this->load->view('admin_temp/footer');
        }

        public function tambahRektorat()
        {
            $this->form_validation->set_rules('nama_rektorat','Nama','trim|required|is_unique[rektorat.nama_rektorat]',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');

            if($this->form_validation->run()== FALSE){

                $menu['menu']       = 'data rektorat';
                $judul['title']     = "Tambah Data Rektorat";
                $data['jurusan']    = $this->db->get('user_jurusan')->result_array();
                $data['rektorat']   = $this->db->get('kategori_rektorat')->result_array();

                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/tambahRektorat', $data);
                $this->load->view('admin_temp/footer');

            }else{
                $nama_rektorat  = $this->input->post('nama_rektorat');
                $jabatan        = $this->input->post('jabatan');
                $dosen          = $this->input->post('dosen');
                $kuotes         = $this->input->post('kuotes');
                $foto           = $_FILES['foto']['name'];
                if($foto = ''){}else{
                    $config['upload_path']          = './gambar';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('foto')){
                        echo"Upload Foto Gagal!"; die();
        
                    }else{
                        $foto = $this->upload->data('file_name');
                    } 
                }

                $data = [
                    'nama_rektorat' => $nama_rektorat,
                    'jabatan'       => $jabatan,
                    'dosen'         => $dosen,
                    'kuotes'        => $kuotes,
                    'foto'          => $foto

                ];

                $exe = $this->db->insert('rektorat', $data);
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil tambah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('data-rektorat');
                    }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal tambah data!</div>');
                    redirect('data-rektorat');
                }
            }
        }

        public function ubahRektorat($id)
        {
            $this->form_validation->set_rules('nama_rektorat','Nama Rektorat','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('jabatan','Jabatan','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('dosen','Dosen','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('kuotes','kuotes','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');
            if($this->form_validation->run()== FALSE){

                $menu['menu']       = 'data rektorat';
                $judul['title']     = "Tambah Data Rektorat";
                $data['jurusan']    = $this->db->get('user_jurusan')->result_array();
                $data['rtr']         = $this->db->get_where('rektorat',['id_rektorat' =>$id])->row_array();
                $data['rektorat']   = $this->db->get('kategori_rektorat')->result_array();

                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/ubahRektorat', $data);
                $this->load->view('admin_temp/footer');

            }else{
                $nama_rektorat  = $this->input->post('nama_rektorat');
                $jabatan        = $this->input->post('jabatan');
                $dosen          = $this->input->post('dosen');
                $kuotes         = $this->input->post('kuotes');

                // ambil data foto
                if (!empty($_FILES['foto']['name'])) {
                    $foto = $this->_uploadImage();
                    $this->hapus_file($this->input->post('gambar_lama'));
                } else {
                    $foto = $this->input->post('gambar_lama');
                }

                $data = [
                    'nama_rektorat' => $nama_rektorat,
                    'jabatan'       => $jabatan,
                    'dosen'         => $dosen,
                    'kuotes'        => $kuotes,
                    'foto'          => $foto

                ];

                $where = [
                    'id_rektorat' => $id
                ];

                $exe = $this->Madmin->ubahRektorat($where, $data, 'rektorat');
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil ubah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('data-rektorat');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal ubah data!</div>');
                    redirect('data-rektorat');
                }
            }
        }

        public function hapusRektorat($id){
            $menu['menu'] = 'data rektorat';
            $judul['title'] = "Hapus Data Rektorat";

            $where = array('id_rektorat' => $id);
            $exe = $this->Madmin->hapusRektorat($where, 'rektorat');

            if($exe){
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil hapus data!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('data-rektorat');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal hapus data!</div>');
                redirect('data-rektorat');
            }
        }

        // ===================================================================================
        // ABOUT
        // ===================================================================================

        public function about()
        {
            $menu['menu']   = 'about';
            $judul['title'] = "Tentang";
            $data['about']  = $this->db->get('informasi_about')->result_array();

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/about', $data);
            $this->load->view('admin_temp/footer');
        }

        public function tambahAbout()
        {
            $this->form_validation->set_rules('judul','Judul','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('keterangan','Keterangan','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');

            if($this->form_validation->run()== FALSE){

                $menu['menu'] = 'admin';
                $judul['title'] = "Tambah Data About";
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/tambahAbout');
                $this->load->view('admin_temp/footer');

            }else{
                $judul       = $this->input->post('judul');
                $keterangan  = $this->input->post('keterangan');
                $foto           = $_FILES['foto']['name'];
                if($foto = ''){}else{
                    $config['upload_path']          = './gambar';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('foto')){
                        echo"Upload Foto Gagal!"; die();
        
                    }else{
                        $foto = $this->upload->data('file_name');
                    } 
                }

                $data = [
                    'judul'      => $judul,
                    'keterangan' => $keterangan,
                    'gambar'     => $foto
                ];
                $exe = $this->db->insert('informasi_about', $data);
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil tambah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('informasi-about');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal tambah data!</div>');
                    redirect('informasi-about');
                }
            }
        }

        public function ubahAbout($id)
        {
            $this->form_validation->set_rules('judul','Judul','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('keterangan','Keterangan','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');
            if($this->form_validation->run()== FALSE){

                $menu['menu']       = 'about';
                $judul['title']     = "Ubah Data About";
                $data['about']      = $this->db->get_where('informasi_about',['id_inbout' =>$id])->row_array();
               

                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/ubahAbout', $data);
                $this->load->view('admin_temp/footer');

            }else{
                $judul          = $this->input->post('judul');
                $keterangan     = $this->input->post('keterangan');
                $foto           = $_FILES['foto']['name'];

                // ambil data foto
                if (!empty($_FILES['foto']['name'])) {
                    $foto = $this->_uploadImage();
                    $this->hapus_file($this->input->post('gambar_lama'));
                } else {
                    $foto = $this->input->post('gambar_lama');
                }

                $data = [
                    'judul'         => $judul,
                    'keterangan'    => $keterangan,
                    'gambar'        => $foto

                ];

                $where = [
                    'id_inbout' => $id
                ];

                $exe = $this->Madmin->ubahAbout($where, $data, 'informasi_about');
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil ubah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('informasi-about');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal ubah data!</div>');
                    redirect('informasi-about');
                }
            }
        }

        public function hapusAbout($id){
            $menu['menu'] = 'about';
            $judul['title'] = "Hapus Data About";

            $where = array('id_inbout' => $id);
            $exe = $this->Madmin->hapusAbout($where, 'informasi_about');

            if($exe){
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil hapus data!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('informasi-about');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal hapus data!</div>');
                redirect('informasi-about');
            }
        }

        // =====================================================================================
        // DATA TIM KEMAHASISWAAN
        // =====================================================================================

        public function kemahasiswaan()
        {
            $menu['menu']           = 'kemahasiswaan';
            $judul['title']         = "Kemahasiswaan";
            $data['kemahasiswaan']  = $this->db->get('kemahasiswaan')->result_array();

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/kemahasiswaan', $data);
            $this->load->view('admin_temp/footer');
        }

        public function tambahKemahasiswaan()
        {
            $this->form_validation->set_rules('nama','Nama','trim|required|is_unique[kemahasiswaan.nama]',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('no_wa','No Whatsapp','trim|required|is_unique[kemahasiswaan.no_wa]',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s tidak boleh sama, ganti dengan yang lain!');

            if($this->form_validation->run()== FALSE){

                $menu['menu'] = 'kemahasiswaan';
                $judul['title'] = "Tambah Data Kemahasiswaan";
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/tambahKemahasiswaan');
                $this->load->view('admin_temp/footer');

            }else{  
                $nama   = $this->input->post('nama');
                $no_wa  = $this->input->post('no_wa');
                $foto           = $_FILES['foto']['name'];
                if($foto = ''){}else{
                    $config['upload_path']          = './gambar';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('foto')){
                        echo"Upload Foto Gagal!"; die();
        
                    }else{
                        $foto = $this->upload->data('file_name');
                    } 
                }

                $data = [
                    'nama'  => $nama,
                    'no_wa' => $no_wa,
                    'foto'  => $foto
                ];

                $exe = $this->db->insert('kemahasiswaan', $data);
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil tambah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('kemahasiswaan');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal tambah data!</div>');
                    redirect('kemahasiswaan');
                }
            }
        }

        public function ubahKemahasiswaan($id)
        {
            $this->form_validation->set_rules('nama','Nama','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('no_wa',' No Whatsapp','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');
            if($this->form_validation->run()== FALSE){

                $menu['menu']       = 'kemahasiswaan';
                $judul['title']     = "Kemahasiswaan";
                $data['kms']        = $this->db->get_where('kemahasiswaan',['id_kemahasiswaan' =>$id])->row_array();

                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/ubahKemahasiswaan', $data);
                $this->load->view('admin_temp/footer');

            }else{
                $nama           = $this->input->post('nama');
                $no_wa          = $this->input->post('no_wa');

                // ambil data foto
                if (!empty($_FILES['foto']['name'])) {
                    $foto = $this->_uploadImage();
                    $this->hapus_file($this->input->post('gambar_lama'));
                } else {
                    $foto = $this->input->post('gambar_lama');
                }

                $data = [
                    'nama'          => $nama,
                    'no_wa'         => $no_wa,
                    'foto'          => $foto

                ];

                $where = [
                    'id_kemahasiswaan' => $id
                ];

                $exe = $this->Madmin->ubahKemahasiswaan($where, $data, 'kemahasiswaan');
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil ubah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('kemahasiswaan');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal ubah data!</div>');
                    redirect('kemahasiswaan');
                }
            }
        }

        public function hapusKemahasiswaan($id){
            $menu['menu'] = 'kemahasiswaan';
            $judul['title'] = "Hapus Data Kemahasiswaan";

            $where = array('id_kemahasiswaan' => $id);
            $exe = $this->Madmin->hapusKemahasiswaan($where, 'kemahasiswaan');

            if($exe){
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil hapus data!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('kemahasiswaan');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal hapus data!</div>');
                redirect('kemahasiswaan');
            }
        }

        // ==================================================================
        // DATA BERITA
        // ==================================================================
        public function dataBerita()
        {
            $menu['menu'] = 'berita';
            $judul['title'] = "Data Berita";
            $data['berita'] = $this->db->get('berita')->result_array();

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/dataBerita', $data);
            $this->load->view('admin_temp/footer');
        }

        public function tambahBerita()
        {
            $this->form_validation->set_rules('judul','Judul','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('keterangan','Password','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');

            if($this->form_validation->run()== FALSE){

                $menu['menu'] = 'berita';
                $judul['title'] = "Tambah Data Berita";
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/tambahBerita');
                $this->load->view('admin_temp/footer');

            }else{
                $judul      = $this->input->post('judul');
                $keterangan = $this->input->post('keterangan');
                $foto           = $_FILES['foto']['name'];
                if($foto = ''){}else{
                    $config['upload_path']          = './gambar';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('foto')){
                        echo"Upload Foto Gagal!"; die();
        
                    }else{
                        $foto = $this->upload->data('file_name');
                    } 
                }

                $data = [
                    'judul'         => $judul,
                    'keterangan'    => $keterangan,
                    'view'         => 0,
                    'gambar'        => $foto
                ];

                $exe = $this->db->insert('berita', $data);
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil tambah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('data-berita');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal tambah data!</div>');
                    redirect('data-berita');
                }
            }
        }

        public function detailBerita($id)
        {
            $menu['menu']   = 'berita';
            $judul['title'] = "Data Berita";
            $data['brt']    = $this->db->get_where('berita', ['id_berita' => $id])->row_array();

            
            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/detailBerita', $data);
            $this->load->view('admin_temp/footer');
        }

        public function ubahBerita($id)
        {
            $this->form_validation->set_rules('judul','Judul','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('keterangan','Keterangan','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('view','View','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');
            if($this->form_validation->run()== FALSE){

                $menu['menu']       = 'berita';
                $judul['title']     = "Ubah Data Berita";
                $data['brt']      = $this->db->get_where('berita',['id_berita' =>$id])->row_array();
               

                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/ubahBerita', $data);
                $this->load->view('admin_temp/footer');

            }else{
                $judul          = $this->input->post('judul');
                $keterangan     = $this->input->post('keterangan');
                $view           = $this->input->post('view');
                
                // ambil data foto
                if (!empty($_FILES['foto']['name'])) {
                    $foto = $this->_uploadImage();
                    $this->hapus_file($this->input->post('gambar_lama'));
                } else {
                    $foto = $this->input->post('gambar_lama');
                }

                $data = [
                    'judul'         => $judul,
                    'keterangan'    => $keterangan,
                    'gambar'        => $foto

                ];

                $where = [
                    'id_berita' => $id
                ];

                $exe = $this->Madmin->ubahBerita($where, $data, 'berita');
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil ubah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('data-berita');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal ubah data!</div>');
                    redirect('data-berita');
                }
            }
        }

        public function hapusBerita($id){
            $menu['menu'] = 'berita';
            $judul['title'] = "Hapus Data Berita";

            $where = array('id_berita' => $id);
            $exe = $this->Madmin->hapusBerita($where, 'berita');

            if($exe){
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil hapus data!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('data-berita');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal hapus data!</div>');
                redirect('data-berita');
            }
        }

        // ===================================================================================
        //DATA KONTAK
        // ===================================================================================

        public function dataKontak()
        {
            $menu['menu']   = 'data-kontak';
            $judul['title'] = "Kontak";
            $data['kontak']  = $this->db->get('kontak')->result_array();

            $this->load->view('admin_temp/header', $judul);
            $this->load->view('admin_temp/sidebar', $menu);
            $this->load->view('admin/kontak', $data);
            $this->load->view('admin_temp/footer');
        }

        public function tambahKontak()
        {
            $this->form_validation->set_rules('email','Email','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('no_hp','No Telepon','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('alamat','Alamat','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');

            if($this->form_validation->run()== FALSE){

                $menu['menu'] = 'data-kontak';
                $judul['title'] = "Tambah Data Admin";
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/tambahKontak');
                $this->load->view('admin_temp/footer');

            }else{
                $data['email']  = $this->input->post('email');
                $data['no_hp']  = $this->input->post('no_hp');
                $data['alamat'] = $this->input->post('alamat');

                $exe = $this->db->insert('kontak', $data);
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil tambah data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('data-kontak');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal tambah data!</div>');
                    redirect('data-kontak');
                }
            }
        }

        public function ubahKontak($id)
        {
            $this->form_validation->set_rules('email','Email','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('no_hp','No Telepon','trim|required',array('required' => '%s tidak boleh kosong'));
            $this->form_validation->set_rules('alamat','Alamat','trim|required',array('required' => '%s tidak boleh kosong'));
    
            $this->form_validation->set_message('is_unique','%s Sudah ada, ganti dengan yang lain!');
            if($this->form_validation->run()== FALSE){
                
                $menu['menu']   = 'data-kontak';
                $judul['title'] = "Ubah Data Kontak";
                $data['kontak'] = $this->db->get_where('kontak', ['id' => $id])->row_array();
    
                $this->load->view('admin_temp/header', $judul);
                $this->load->view('admin_temp/sidebar', $menu);
                $this->load->view('admin/ubahKontak', $data);
                $this->load->view('admin_temp/footer');
            }else{
                $data['email'] 	    = $this->input->post('email');
                $data['no_hp'] 	    = $this->input->post('no_hp');
                $data['alamat'] 	= $this->input->post('alamat');
    
    
                $where = array(
                    'id' => $id
    
                );
    
                $exe = $this->Madmin->ubahAdmin($where, $data, 'kontak');
                if($exe){
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil edit data!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
				    redirect('data-kontak');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal edit data!</div>');
				    redirect('data-kontak');
                }

                   
            }
        }

        public function hapusKontak($id){
            $menu['menu'] = 'data-kontak';
            $judul['title'] = "Hapus Data Kontak";

            $where = array('id' => $id);
            $exe = $this->Madmin->hapusKontak($where, 'kontak');

            if($exe){
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil hapus data!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('data-kontak');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Gagal hapus data!</div>');
                redirect('data-kontak');
            }
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
    