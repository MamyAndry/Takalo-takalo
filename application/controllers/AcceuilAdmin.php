<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AcceuilAdmin extends CI_Controller {

	public function index()
	{
        $this->load->model('statistiques');
        $this->load->model('select');
        $data['nbrInscrit'] = $this->statistiques->nombreUser();
        $data['nbrEchange'] = $this->statistiques->nombreEchange();
        $data['categories']=$this->select->getAllCategories();
        $this->load->view('backoffice',$data);
	}		
}