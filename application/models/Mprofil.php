<?php 

    class Mprofil extends CI_model
    {
        public function ubahMhs($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }


        public function ubahFoto1($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }

        public function ubahFoto2($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }
    }
    
?>