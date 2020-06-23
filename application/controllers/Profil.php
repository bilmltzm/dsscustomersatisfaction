<?php

class Profil extends CI_Controller{
	public function index()
	{
		$data['judul'] = 'Customer Satisfaction System';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
		$this->load->view('profilperusahaan/index');
	}

}

