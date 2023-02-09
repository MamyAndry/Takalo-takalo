<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistiques extends CI_Model {

    public function nombreUser(){
        $query = $this->db->query("SELECT COUNT(idUser) FROM utilisateur WHERE estAdmin = 0");
        $result = $query->row_array();
        return $result["COUNT(idUser)"];
    }

    public function nombreEchange(){
        $query = $this->db->query("SELECT COUNT(idUser1) FROM echange WHERE  etatechange = 1");
        $result = $query->row_array();
        return $result["COUNT(idUser1)"];
    }
}