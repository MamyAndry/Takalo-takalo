<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

	public function deleteCategorie($id = 0)
	{
		$this->load->model('categorie');
        $this->categorie->deleteCategorie($id);
		redirect("index.php/AcceuilAdmin");
	}		
}
