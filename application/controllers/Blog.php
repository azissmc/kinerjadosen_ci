<?php

    class Blog extends CI_Controller
    {
     
        public function index()
        {
            $judul['title'] = "Berita";

            if($this->session->userdata('nim')){

                $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();
                $data['berita'] = $this->db->order_by('created_date', 'desc')->get('berita')->result_array();
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar', $getMhs);
                $this->load->view('blog', $data);

            }else if($this->session->userdata('nidn')){

                $getDsn['Dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();
                $data['berita'] = $this->db->order_by('created_date', 'desc')->get('berita')->result_array();
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar_dosen', $getDsn);
                $this->load->view('blog', $data);

            }else{
                $data['berita'] = $this->db->order_by('created_date', 'desc')->get('berita')->result_array();
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar');
                $this->load->view('blog', $data);
            }
            
        }

        public function blogDetail($id)
        {
            $judul['title'] = "Berita-detail";

            if($this->session->userdata('nim')){

                $getMhs['mhs'] = $this->db->get_where('user',['nim'=> $this->session->userdata('nim')])->row_array();
                //viewer
                $getdata=$this->db->query("update berita set view=view+1 where id_berita='$id'");
                //tampil data
                $data['berita']=$this->db->get_where('berita',['id_berita'=>$id])->row_array();
                $data['populer'] = $this->db->order_by('view', 'desc')->limit(3)->get_where('berita',['view !=' => 0, 'id_berita !=' => $id])->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar', $getMhs);
                $this->load->view('blog_detail', $data);

            }else if($this->session->userdata('nidn')){

                $getDsn['dsn'] = $this->db->get_where('user',['nidn'=> $this->session->userdata('nidn')])->row_array();
                //viewer
                $getdata=$this->db->query("update berita set view=view+1 where id_berita='$id'");
                //tampil data
                $data['berita']=$this->db->get_where('berita',['id_berita'=>$id])->row_array();
                $data['populer'] = $this->db->order_by('view', 'desc')->limit(3)->get_where('berita',['view !=' => 0, 'id_berita !=' => $id])->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar_dosen', $getDsn);
                $this->load->view('blog_detail', $data);

            }else{
                $getdata=$this->db->query("update berita set view=view+1 where id_berita='$id'");
                //tampil data
                $data['berita']=$this->db->get_where('berita',['id_berita'=>$id])->row_array();
                $data['populer'] = $this->db->order_by('view', 'desc')->limit(3)->get_where('berita',['view !=' => 0, 'id_berita !=' => $id])->result_array();
    
                $this->load->view('components/header', $judul);
                $this->load->view('components/navbar');
                $this->load->view('blog_detail', $data);
            }            
        }
    }
    