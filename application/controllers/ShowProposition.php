<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class ShowProposition extends CI_Controller {
        
        public function index(){
            $id = $this->session->userdata('idUser');
            // $this->load->model('select');
            $this->load->model('objet');
            // $data['categories']=$this->select->getAllCategories();
            $data['list'] = $this->objet->listproposition($id);
            $this->load->view('listeProposition',$data);
        }	
    }
?>
