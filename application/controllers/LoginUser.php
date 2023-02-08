<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginUser extends CI_Controller {

	public function traitement()
	{
		$mail = $_POST['email'];
		$pwd = $_POST['password'];
		$this->load->model('Connect');
		$data = $this->connect->connectUser($mail,$mdp);
		if($data != null){
            redirect('acceuil');
        }
		else redirect('FormLoginUser');
	}		
}
