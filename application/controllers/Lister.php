<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lister extends CI_Controller {

    public function index(){
        // $idUser = $this->session->userdata('idUser');
        $idUser = 1;
        $idObjet = $this->input->post('idObjet');
        $marge = $this->input->post('marge');
        $this->load->model('Objet');
        $data['list'] = $this->Objet->listObject($idUser,$idObjet,$marge);
        $this->load->view('listeAutres',$data);
    }
}