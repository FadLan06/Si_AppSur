<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Selamat Datang'
		];
		$this->load->view('auth/login', $data);
	}
}
