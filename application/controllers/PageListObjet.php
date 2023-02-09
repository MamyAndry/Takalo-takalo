<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class PageListObjet extends CI_Controller {

	public function index()
	{
		$this->load->model('Objet');
        $data['objets']=$this->Objet->listObjectById(1);
		$this->load->view('myListObjet',$data);
	}		
}
