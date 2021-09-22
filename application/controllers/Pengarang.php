<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengarang extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//$this->Security_model->login_check();
		}
	public function index()
	{
		$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
			$tmp['content']=$this->load->view('layout');
			$this->load->view('pengarang/View_pengarang',$data, $tmp);
			
	}
	public function create()
	{
		$this->form_validation->set_rules('nama_pengarang', 'nama_pengarang', 'trim|required');
				if($this->form_validation->run()==FALSE)
				{
					$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('pengarang/Create_pengarang',$data,$tmp);
					
				}
			 	else
				{
		            $data = array('id_pengarang' => '',
		                          'nama_pengarang' => $this->input->post('nama_pengarang')
		                        );
					$quer=$this->Buku_model->insertData('tb_pengarang',$data);
					redirect("index.php/Pengarang","refresh");	
				}
	}
	
	public function edit()
	{ 
		$id = $this->input->get('id_pengarang',true);	
				$this->form_validation->set_rules('nama_pengarang', 'nama_pengarang', 'trim|required');
				if($this->form_validation->run()==FALSE)
				{
					$data['pengarang'] = $this->Buku_model->get_detail1('tb_pengarang','id_pengarang',$id);
					$tmp['content']=$this->load->view('layout');
					$this->load->view('pengarang/Edit_pengarang',$data,$tmp);
					
				}
		
 	}
 	public function update()
	{ 
		$id = $this->input->post('id_pengarang');	
				$this->form_validation->set_rules('nama_pengarang', 'nama_pengarang', 'trim|required');
				if($this->form_validation->run()==FALSE)
				{
					$data['pengarang'] = $this->Buku_model->get_detail1('tb_pengarang','id_pengarang',$id);
					$tmp['content']=$this->load->view('layout');
					$this->load->view('index.php/pengarang/Edit_pengarang',$data,$tmp);
				}
			 	else
				{
					$id = $this->input->post('id_pengarang');
		            $data = array(
		                          'nama_pengarang' => $this->input->post('nama_pengarang')
		                        );
					$quer=$this->Buku_model->updatepengarang($data,$id);
					redirect("index.php/Pengarang","refresh");	
				}
		
 	}
 	public function delete()
		{
			
			$field='id_pengarang';
			$id = $this->input->get('id_pengarang',true);	
  			$query = $this->Buku_model->delete('tb_pengarang',$field,$id);					
			if ($query)
				{
					$this->session->set_flashdata("message","berhasil");
					redirect("index.php/Pengarang","refresh");
				}
			else
				{
					$this->session->set_flashdata("message","gagal");
					redirect("index.php/Pengarang","refresh");
				}
 		}
}