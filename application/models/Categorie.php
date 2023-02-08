<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Model {

    public function updateCategorie($id,$nom){
        $sql="UPDATE categorie SET nom = '%s' WHERE idCategorie = %d";
        $sql = sprintf($sql,$nom,$id);
        echo $sql;
        $this->db->query($sql);
    }

    public function addCategorie($nom){
        $sql="INSERT INTO categorie VALUES (null,'%s')";
        $sql = sprintf($sql,$nom);
        //echo $sql;
        $this->db->query($sql);
    }

    public function getValue($id){
        $sql="SELECT * FROM categorie WHERE idcategorie = %d";
        $sql = sprintf($sql,$id);
        // echo $sql;
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }
}