<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceuil extends CI_Controller {

	public function index()
	{
		$this->load->model('select');
        $data['images']=$this->select->getImgDes();
		$this->load->model('Objet');
        $data['objets']=$this->Objet->listObjectById(1);
		$this->load->view('index2',$data);
	}	
	
}
