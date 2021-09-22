<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function daftarbuku()
	{
			$this->load->view('daftar_buku');
	}

	public function tentang()
	{
			$this->load->view('tentang_bapelkes');
	}
	public function kalender()
	{
			$this->load->view('View_kalender');
	}

	public function beranda_admin()
	{
			$this->load->view('beranda_admin/beranda');
	}

	public function pinjam(){
			$this->load->view('detail_pinjam/detail_pinjam');
	}


	public function login()
	{
		$this->load->view('form_login');
	}



	 public function laporan()
    {
         $id_buku=$this->input->get('id_buku');
           	echo  $id_detail_pinjam=$this->input->post('id_detail_pinjam');
            $data['data_kelas'] = $this->Buku_model->getAllData("tb_kelas");
            $data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
            $data['data_pinjam'] = $this->Buku_model->getAllData("tb_pinjam");
            $data['data_detail_pinjam'] = $this->Buku_model->getAllData("tb_detail_pinjam");
            $data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
            $data['data_kembali'] = $this->Buku_model->getAllData("tb_kembali");
            $data['model'] = $this->Buku_model;
            $data['data_detail_buku'] = $this->Buku_model->getAllData("tb_detail_buku");
            $data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
            $this->load->view('laporan',$data);
        }

        public function data_pengembalian(){
			$data['data_pinjam'] = $this->Buku_model->getAllData("tb_pinjam");
			$data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
			$data['anggota'] = $this->Buku_model->getAllData("tb_anggota");
			$data['model'] = $this->Buku_model;
			$this->load->view('data_kembali',$data);
			}



	function reload(){
    redirect(base_url("index.php/beranda/beranda_admin"));
    
  }
		
	

	
}
