<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class InsertPhoto extends CI_Controller {
        public function index(){
            $this->load->model('Upload');
            $this->load->model('Upload');
            $filenames=$this->Upload->importImage();
            $idObjet=7;
            $this->load->model('Insert');
            $this->Insert->insertPhoto($idObjet,$filenames);
        }	
    }
?>