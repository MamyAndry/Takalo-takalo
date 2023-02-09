<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Model {

    public function deleteCategorie($id){
        $this->db->where("idCategorie",$id);
        $this->db->delete("categorie");
    }

    public function addCategorie($nom){
        $sql="INSERT INTO categorie VALUES (null,'%s')";
        $sql = sprintf($sql,$nom);
        echo $sql;
        $this->db->query($sql);
    }
}