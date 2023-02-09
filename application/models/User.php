<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    
    public function getName($id){
        $requete = "SELECT idUser FROM utilisateur WHERE id = %d";
        $requete = sprintf($requete,$id);
        $query = $this->db->query($requete);
        $result = $query->row_array();
        return $result;
    }
}