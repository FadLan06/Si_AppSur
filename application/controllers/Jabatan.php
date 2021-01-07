<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Data Jabatan'
		];
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('back-end/data-master/jabatan/index', $data);
		$this->load->view('template/footer', $data);
	}
}
