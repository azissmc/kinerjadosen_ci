<?php

    class Madmin extends CI_model
    {
        public function ubahAdmin($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }

        public function HapusAdmin($where, $table)
        {
            $this->db->where($where);
            return $this->db->delete($table);
        }

        // ================================================================
        // DATA MAHASISWA
        // ================================================================
        public function ubahMahasiswa($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }

        public function HapusMahasiswa($where, $table)
        {
            $this->db->where($where);
            return $this->db->delete($table);
        }

        // ================================================================
        // DATA DOSEN
        // ================================================================
        public function ubahDosen($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }

        public function HapusDosen($where, $table)
        {
            $this->db->where($where);
            return $this->db->delete($table);
        }

        // ================================================================
        // DATA REKTORAT
        // ================================================================
        public function ubahRektorat($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }

        public function HapusRektorat($where, $table)
        {
            $this->db->where($where);
            return $this->db->delete($table);
        }

        // ================================================================
        // DATA KATEGORI REKTORAT
        // ================================================================
        public function ubahKategoriRektorat($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }

        public function hapusKategoriRektorat($where, $table)
        {
            $this->db->where($where);
            return $this->db->delete($table);
        }

        // ================================================================
        // DATA ABOUT
        // ================================================================
        public function ubahAbout($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }

        public function hapusAbout($where, $table)
        {
            $this->db->where($where);
            return $this->db->delete($table);
        }

        // ================================================================
        // DATA TIM KEMAHASISWAAN
        // ================================================================
        public function ubahKemahasiswaan($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }

        public function hapusKemahasiswaan($where, $table)
        {
            $this->db->where($where);
            return $this->db->delete($table);
        }

        // ================================================================
        // DATA BERITA
        // ================================================================
        public function ubahBerita($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }

        public function hapusBerita($where, $table)
        {
            $this->db->where($where);
            return $this->db->delete($table);
        }

        // ================================================================
        // DATA KONTAK
        // ================================================================
        public function ubahKontak($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }

        public function hapusKontak($where, $table)
        {
            $this->db->where($where);
            return $this->db->delete($table);
        }
    }
    