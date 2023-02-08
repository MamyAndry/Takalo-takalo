<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Model {
    public function insertInscrip($nom,$email,$password){
        $sql = "INSERT INTO utilisateur(nom,email,password,estadmin) VALUES ('%s','%s','%s',%s)";
        $sql = sprintf($sql,$nom,$email,$password,0);
        $this->db->query($sql);
    }

    public function insertObject($idUtilisateur,$idCategorie,$nom,$description,$prix){
        $sql="INSERT INTO objet (idUtilisateur,idCategorie,nom,description,prix) VALUES (%s,%s,'%s','%s',%g)";
        $sql = sprintf($sql,$idUtilisateur,$idCategorie,$nom,$description,$prix);
        // echo $sql;
        $this->db->query($sql);
    }
    
    public function insertPhoto($idObjet,$filenames){
        echo count($filenames);
        for ($i=0; $i < count($filenames); $i++) { 
            $sql = "";
            $sql="INSERT INTO photo (idobjet,titre) VALUES (%s,'%s')";
            $sql = sprintf($sql,$idObjet,$filenames[$i]);
            echo $sql;
            $this->db->query($sql);

        }
    }
}
    