<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class InsertValObject extends CI_Controller {
        public function index(){
            $idUtilisateur=$this->input->post('idUtilisateur');
            // $idUtilisateur=$this->session->userdata('idUser');
            $idCategorie=$this->input->post('idCategorie');
            $nom=$this->input->post('nom');
            $description=$this->input->post('description');
            $prix=$this->input->post('prix');
            $this->load->model('Insert');
            $this->Insert->insertObject($idUtilisateur,$idCategorie,$nom,$description,$prix);
            $this->load->view('ajouterPhoto');
        }	
    }
?>
