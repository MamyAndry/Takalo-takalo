<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Model {

    public function deleteCategorie($id){
        $sql="DELETE FROM categorie WHERE idCategorie = %i";
        $sql = sprintf($sql,$id);
        // echo $sql;
        $this->db->query($sql);
        $this->db->query_affected();
    }

    public function addCategorie($nom){
        $sql="INSERT INTO categorie VALUES (null,%s)";
        $sql = sprintf($sql,$nom);
        // echo $sql;
        $this->db->query($sql);
        $this->db->query_affected();
    }
}