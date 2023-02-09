<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class InsertCategorie extends CI_Controller {
        public function index(){
            $categorie=$this->input->post('categorie');
            $this->load->model('categorie');
            $this->categorie->addCategorie($categorie);
            redirect('index.php/AcceuilAdmin');
        }	
    }
?>
