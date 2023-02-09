<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connect extends CI_Model {
    
    public function connectUser($mail,$mdp){
        $requete = "SELECT * FROM utilisateur WHERE email = '%s' AND password = '%s'";
        $requete = sprintf($requete,$mail,$mdp);
        echo $requete;
        $query = $this->db->query($requete);
        $result = $query->row_array();
        $this->session->set_userdata($result['iduser'],"idUser");
        return $result;
    }

    public function connectAdmin($mail,$mdp){
        $requete = "SELECT * FROM utilisateur WHERE email = '%s' AND password = '%s' AND estAdmin = 1";
        $requete = sprintf($requete,$mail,$mdp);
        echo $requete;
        $query = $this->db->query($requete);
        $result = $query->row_array();
        $this->session->set_userdata($result['iduser'],"idUser");
        return $result;
    }

    public function isAdmin($id){
        $requete = "SELECT idUser FROM utilisateur WHERE id = %i estAdmin = 1";
        $requete = sprintf($requete,$id);
        $query = $this->db->query($requete);
        $result = $query->row_array();
        if($res != null){
            return true;
        }
        return false;
    }
}