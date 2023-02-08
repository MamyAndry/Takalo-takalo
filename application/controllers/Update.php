<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class update extends CI_Controller {

	public function index($id = 0)
	{
		$this->load->model('categorie');
		$data['categorie']= $this->categorie->getValue($id);
		$this->load->view('updateforme',$data);

	}
	public function traitement()
	{
		$this->load->model('categorie');
		$id = $this->input->post('id');
		$nom =$this->input->post('nom') ;
		$data['categorie']= $this->categorie->updateCategorie($id,$nom);
		Redirect('index.php/AcceuilAdmin');
	}
			
}
