<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//$this->Security_model->login_check();
		}
	public function index()
	{
		$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
		$tmp['content']=$this->load->view('layout');
		$this->load->view('kategori/View_kategori',$data, $tmp);
			
	}
	public function create()
	{
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
				if($this->form_validation->run()==FALSE)
				{
					$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('kategori/Create_kategori',$data, $tmp);
					
				}
			 	else
				{
		            $data = array('id_kategori' => '',
		                          'kategori' => $this->input->post('kategori')
		                        );
					$quer=$this->Buku_model->insertData('tb_kategori',$data);
					redirect("index.php/admin/data_kategori","refresh");	
				}
	}
	
	public function edit()
	{ 
		$id = $this->input->get('id_kategori',true);	
				$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
				if($this->form_validation->run()==FALSE)
				{
					//$data ['err'] = validation_errors();
					$data['title']='Edit Kategori';
					$data['pointer']="Kategori";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Data Kategori";
					$data['sub_bread']="Edit Kategori";
					$data['desc']="Form untuk melakukan edit data kategori buku";

					/*data yang ditampilkan*/
					$data['kategori'] = $this->Buku_model->get_detail1('tb_kategori','id_kategori',$id);
					//$data['data_kelas'] = $this->Buku_model->getAllData("tb_kelas");
					//$data['data_agama'] = $this->Buku_model->getAllData("tb_agama");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('kategori/Edit_kategori',$data,$tmp);
					
				}
 	}
 	public function update()
	{ 
		$id = $this->input->post('id_kategori');	
				$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
				if($this->form_validation->run()==FALSE)
				{
					//$data ['err'] = validation_errors();
					$data['title']='Edit Kategori';
					$data['pointer']="Kategori";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Data Kategori";
					$data['sub_bread']="Edit Kategori";
					$data['desc']="Form untuk melakukan edit kategori";

					/*data yang ditampilkan*/
					$data['kategori'] = $this->Buku_model->get_detail1('tb_kategori','id_kategori',$id);
					//$data['data_kelas'] = $this->Buku_model->getAllData("tb_kelas");
					//$data['data_agama'] = $this->Buku_model->getAllData("tb_agama");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('kategori/Edit_kategori',$data,$tmp);
					
				}
			 	else
				{
					$id = $this->input->post('id_kategori');	
		            $data = array(
		                          'kategori' => $this->input->post('kategori')
		                        );
					$quer=$this->Buku_model->updatekategori($data,$id);
					redirect("index.php/admin/data_kategori","refresh");	
				}
 	}
 	public function delete()
		{
			
			$field='id_kategori';
			$id = $this->input->get('id_kategori',true);	
  			$query = $this->Buku_model->delete('tb_kategori',$field,$id);					
			if ($query)
				{
					$this->session->set_flashdata("message","berhasil");
					redirect("index.php/admin/data_kategori","refresh");
				}
			else
				{
					$this->session->set_flashdata("message","gagal");
					redirect("index.php/admin/data_kategori","refresh");
				}
 		}
}