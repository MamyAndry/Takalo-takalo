<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Model {

    public function insertInscrip($nom,$email,$password){
        $sql = "INSERT INTO utilisateur(nom,email,password,estadmin) VALUES ('%s','%s','%s',%i)";
        $sql = sprintf($sql,$nom,$email,$password,0);
        $this->db->query($sql);
        $result = $this->db->affected_row();
        return $result;
    }
}
    