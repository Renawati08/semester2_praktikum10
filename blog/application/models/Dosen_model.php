<?php

//Buat class
class Dosen_model extends CI_Model{
    private $table = 'dosen';

    public function getAll(){
        //select * from dosen
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    }
    
?>