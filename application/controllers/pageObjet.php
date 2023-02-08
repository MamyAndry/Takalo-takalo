<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class pageObjet extends CI_Controller {

	public function index()
	{
		$this->load->model('select');
        $data['categories']=$this->select->getAllCategories();
		$this->load->view('ajouterObjet',$data);
	}		
}
