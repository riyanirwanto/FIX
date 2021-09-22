<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rak extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
		}
	public function index(){
		$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
			$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
			$tmp['content']=$this->load->view('layout');
			$this->load->view('rak/View_rak',$data, $tmp);
			
	}
	public function create()
	{
		$this->form_validation->set_rules('nama_rak', 'nama_rak', 'required');
				$this->form_validation->set_rules('kategori', 'kategori', 'required');
				if($this->form_validation->run()==FALSE)
				{
					//$data ['err'] = validation_errors();
					$data['title']='Daftar Rak';
					$data['pointer']="index.php/rak";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Data Rak";
					$data['sub_bread']="Input Rak";
					$data['desc']="Data Master Rak, Menampilkan data Rak Perpustakaan";

					/*data yang ditampilkan*/
					$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
					$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('rak/Create_rak',$data);
					
					
					
				}
			 	else
				{
					
		            $data = array('no_rak' => '',
		                          'nama_rak' => $this->input->post('nama_rak'),
		                          'id_kategori' => $this->input->post('kategori'),
		                        );
					$query=$this->Buku_model->insertData('tb_rak',$data);
					//if ($query)
					//{
						//$this->session->set_flashdata("message","berhasil!!!");
						redirect("index.php/rak","refresh");	
					//}
					/*else
					{
						$this->session->set_flashdata("message","gagal!!!");
						redirect("index.php/rak/create","refresh");	
					}*/
				}
	}
	
	public function edit()
	{ 
		$id = $this->input->get('no_rak');	
				$this->form_validation->set_rules('nama_rak', 'nama_rak', 'required');
				$this->form_validation->set_rules('kategori', 'kategori', 'required');
				if($this->form_validation->run()==FALSE)
				{
					//$data ['err'] = validation_errors();
					$data['title']='Edit Rak';
					$data['pointer']="index.php/rak";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Data Rak";
					$data['sub_bread']="Edit Rak";
					$data['desc']="Form untuk melakukan edit data Rak Perpustakaan";

					/*data yang ditampilkan*/
					$data['rak'] = $this->Buku_model->get_detail1('tb_rak','no_rak',$id);
					$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('rak/Edit_rak',$data,$tmp);
					
				}
 	}
 	public function update()
	{ 
		$id = $this->input->post('id_rak');	
				$this->form_validation->set_rules('nama_rak', 'nama_rak', 'required');
				$this->form_validation->set_rules('kategori', 'kategori', 'required');
				if($this->form_validation->run()==FALSE)
				{
					//$data ['err'] = validation_errors();
					$data['title']='Edit Rak';
					$data['pointer']="index.php/rak";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Data Rak";
					$data['sub_bread']="Edit Rak";
					$data['desc']="Form untuk melakukan edit data Rak Perpustakaan";

					/*data yang ditampilkan*/
					$data['rak'] = $this->Buku_model->get_detail1('tb_rak','no_rak',$id);
					$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('rak/Edit_rak',$data,$tmp);
					
				}
			 	else
				{
					$id = $this->input->post('no_rak');	
					
		            $data = array(
		                          'nama_rak' => $this->input->post('nama_rak'),
		                          'id_kategori' => $this->input->post('kategori'),
		                        );
					$quer=$this->Buku_model->updaterak($data,$id);
					redirect("index.php/rak","refresh");	
				}




 	}
 	public function delete()
		{
			
			$id = $this->input->get('no_rak');	
			$field='no_rak';
  			$query = $this->Buku_model->delete('tb_rak',$field,$id);					
			if ($query)
				{
					$this->session->set_flashdata("message","berhasil");
					redirect("index.php/rak","refresh");
				}
			else
				{
					$this->session->set_flashdata("message","gagal");
					redirect("index.php/rak","refresh");
				}
 		}
}