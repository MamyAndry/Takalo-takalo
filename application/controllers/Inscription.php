<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {
    public function index(){
        $nom = $this->input->post('nom');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
    }

}

?>