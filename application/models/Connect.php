<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connect extends CI_Model {
    
    public function connectUser($mail,$mdp){
        $requete = "SELECT * FROM utilisateur WHERE email = '%s' AND password = '%s' AND estAdmin = 0";
        $requete = sprintf($requete,$mail,$mdp);
        $query = $this->db->query($requete);
        $result = $query->row_array();
    }

    public function connectAdmin($mail,$mdp){
        $requete = "SELECT * FROM utilisateur WHERE email = '%s' AND password = '%s' AND estAdmin = 1";
        $requete = sprintf($requete,$mail,$mdp);
        $query = $this->db->query($requete);
        $result = $query->row_array();
    }

    
}