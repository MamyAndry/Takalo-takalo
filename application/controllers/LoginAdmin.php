<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller {

	public function index()
	{
		$mail = $_POST['email'];
		$pwd = $_POST['password'];
		$this->load->model('connect');
		$data = $this->connect->connectAdmin($mail,$pwd);
        if($data != null){
            redirect('acceuil');
        }
        else redirect('FormLoginAdmin');
	}		
}
