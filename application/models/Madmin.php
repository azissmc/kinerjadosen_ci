<?php

    class Madmin extends CI_model
    {
        public function ubahAdmin($where, $data, $table)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }
    }
    