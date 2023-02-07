<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Takalo extends CI_Model { 
    public function ($idUtilisateur){
        $requete = "SELECT * FROM objet WHERE idobjet = %i";
        $requete = sprintf($requete,$idUtilisateur);
        $query = $this->db->query($requete);
        $result = $query->row_array();
        $this->session->set_userData("id",$result['idUser']);
        return $result;
    }
}
?>