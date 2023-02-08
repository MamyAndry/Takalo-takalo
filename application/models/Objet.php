<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Model {
    
    public function listObject($id,$idObjet,$pourcentage){
        $requete = "SELECT prix FROM objet WHERE idObjet != %d ";
        $requete = sprintf($requete,$idObjet);
        $query = $this->db->query($requete);
        $result = $query->row_array();
        $prix=$requete['prix'];
        
        $limSup=($prix*100/$pourcentage)+$prix;
        $limInf=$prix-($prix*100/$pourcentage);
        $requete = "SELECT * FROM objet WHERE idUser != %d and prix<=%g and prix>=%g";
        $requete = sprintf($requete,$id,$limSup,$limInf);
        $query = $this->db->query($requete);
        $result = $query->result_array();
        return $result;
    }

    public function listObjectById($id){
        $requete = "SELECT * FROM objet WHERE idUtilisateur = %d";
        $requete = sprintf($requete,$id);
        $query = $this->db->query($requete);
        $result = $query->result_array();
        return $result;
    }
    
    public function listProposition($id){
        $requete = "SELECT * FROM echange WHERE idUser2 = %d AND etatechange = 0";
        $requete = sprintf($requete,$id);
        $query = $this->db->query($requete);
        $result = $query->result_array();
        return $result;
    }

    public function getLastIdObject(){
        $requete = "SELECT MAX(idObjet) FROM Objet";
        $requete = sprintf($requete,$id);
        $query = $this->db->query($requete);
        $result = $query->row_array();
        return $result['MAX(idObjet)'];
    }

    public function search($motcle,$categorie){
        if($categorie==0){
            $requete = "SELECT * FROM objet WHERE description LIKE '%%s%' ";
            $requete = sprintf($requete,$motcle);
        }
        else{
            $requete = "SELECT * FROM objet WHERE description LIKE '%%s%' AND idcategorie = %d";
            $requete = sprintf($requete,$motcle,$categorie);
        }
        $query = $this->db->query($requete);
        $result = $query->result_array();
        return $result;

        
    }
}