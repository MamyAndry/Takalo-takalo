<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lister extends CI_Controller {

    public function index(){
        $idUser = 0;
        $idObjet = $this->input->post('idObjet');
        $marge = $this->input->post('marge');
        $this->load->model('Objet');
        $data['list'] = $this->Objet->listObjet($idUser,$idObjet,$marge);
        $this->load->view('listeAutre',$data);
    }
}