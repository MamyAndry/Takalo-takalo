<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Model {
    
    public function listObject($id){
        $requete = "SELECT * FROM objet WHERE id != %i ";
        $requete = sprintf($requete,$id);
        $query = $this->db->query($requete);
        $result = $query->result_array();
        return $result;
    }
    
    public function listProposition($id){
        $requete = "SELECT * FROM echange WHERE idUser2 = %i AND etatechange = 0";
        $requete = sprintf($requete,$id);
        $query = $this->db->query($requete);
        $result = $query->result_array();
        return $result;
    }
}