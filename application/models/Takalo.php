<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Takalo extends CI_Model{ 

    public function confirmer($idechange){
        $sql = "UPDATE echange SET etatechange = 1 WHERE idEchange = %i";
        $sql = sprintf($sql,$idechange);
        $query = $this->db->query($sql);
        $result = $query->affected_row();
    }

    public function refuser($idechange){
        $sql = "UPDATE echange SET etatechange = -1 WHERE idEchange = %i";
        $sql = sprintf($sql,$idechange);
        $query = $this->db->query($sql);
        $result = $query->affected_row();
    }

    public function atakalo($idUser1,$idUser2,$idobjet1,$idobjet2){
        $sql = "INSERT INTO echange VALUES(null,%i,%i,%i,%i,0)";
        $sql = sprintf($sql,$idUser1,$idUser2,$idobjet1,$idobjet2);
        $query = $this->db->query($sql);
        $result = $query->affected_row();
    }
}
?>