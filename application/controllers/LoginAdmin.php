<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller {

	public function traitement()
	{
		$mail = $_POST['mail'];
		$pwd = $_POST['pwd'];
		$this->load->models('connect');
		$data = $this->connect->connectAdmin($mail,$mdp);
        if($data != null){
            redirect(site_url('acceuil'));
        }
        else redirect(site_url('formloginadmin'));
	}		
}
