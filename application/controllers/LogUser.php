<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogUser extends CI_Controller {

	public function index()
	{
		$mail = $_POST['email'];
		$pwd = $_POST['password'];
		$this->load->model('connect');
		$data = $this->connect->connectUser($mail,$pwd);
		if($data != null)
		redirect('index.php/acceuil');
		else 
			redirect('FormLoginUser');
	}
}
