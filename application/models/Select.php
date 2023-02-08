<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select extends CI_Model {
    
    public function getAllCategories(){
        $requete = "SELECT * FROM categorie";
        $query = $this->db->query($requete);
        $result = $query->result_array();
        return $result;
    }

    public function getImgDes(){
        $requete = "SELECT * FROM objet join photo on objet.idObjet = photo.idObjet";
        $query = $this->db->query($requete);
        $result = $query->result_array();
        return $result;
    }
}
