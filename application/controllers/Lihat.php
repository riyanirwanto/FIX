<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihat extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('detail_pinjam/hapus');
	}

	function reload(){
			$this->load->view('beranda_admin/beranda');
	
	}

	public function pinjam(){
			$this->load->view('detail_pinjam/detail_pinjam');
	}

	}