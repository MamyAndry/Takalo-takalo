<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistiques extends CI_Model {

    public function nombreUser(){
        $query = $this->db->query("SELECT COUNT(idUser) FROM utilisateurs WHERE estAdmin = 0");
        $result = $query->row_array();
        return $result;
    }

    public function nombreEchange(){
        $query = $this->db->query("SELECT COUNT(idUser1) FROM echange WHERE idobjet2 not null");
        $result = $query->row_array();
        return $result;
    }
}