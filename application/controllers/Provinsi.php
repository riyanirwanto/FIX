<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provinsi extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//$this->Security_model->login_check();
		}
	public function index()
	{
		$data['data_provinsi'] = $this->Buku_model->getAllData("tb_provinsi");
			$tmp['content']=$this->load->view('layout');
			$this->load->view('provinsi/View_provinsi',$data,$tmp);
			
	}
	public function create()
	{
		$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
				$this->form_validation->set_rules('kota', 'kota', 'trim|required');
				if($this->form_validation->run()==FALSE)
				{
					$data['data_provinsi'] = $this->Buku_model->getAllData("tb_provinsi");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('provinsi/Create_provinsi',$data,$tmp);
					
				}
			 	else
				{
		            $data = array('id_provinsi' => '',
		                          'nama_provinsi' => $this->input->post('provinsi'),
		                          'kota' => $this->input->post('kota')
		                        );
					$quer=$this->Buku_model->insertData('tb_provinsi',$data);
					redirect("index.php/Provinsi","refresh");	
				}
	}
	
	public function edit()
	{ 
		$id = $this->input->get('id_provinsi',true);	
				$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
				$this->form_validation->set_rules('kota', 'kota', 'trim|required');
				if($this->form_validation->run()==FALSE)
				{
					$data['provinsi'] = $this->Buku_model->get_detail1('tb_provinsi','id_provinsi',$id);
					$tmp['content']=$this->load->view('layout');
					$this->load->view('provinsi/Edit_provinsi',$data,$tmp);
					
				}
 	}
 	public function update()
	{ 
		$id = $this->input->post('id_provinsi');	
				$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
				$this->form_validation->set_rules('kota', 'kota', 'trim|required');
				if($this->form_validation->run()==FALSE)
				{
					$data['provinsi'] = $this->Buku_model->get_detail1('tb_provinsi','id_provinsi',$id);
					$tmp['content']=$this->load->view('layout');
					$this->load->view('provinsi/Edit_anggota',$data,$tmp);
					
				}
			 	else
				{
					$id = $this->input->post('id_provinsi');	
					
		            $data = array(
		                          'nama_provinsi' => $this->input->post('provinsi'),
		                          'kota' => $this->input->post('kota')
		                        );
					$quer=$this->Buku_model->updatepropinsi($data,$id);
					redirect("index.php/Provinsi","refresh");	
				}
 	}
 	public function delete()
		{
			
			$field='id_provinsi';
			$id = $this->input->get('id_provinsi',true);	
  			$query = $this->Buku_model->delete('tb_provinsi',$field,$id);					
			if ($query)
				{
					$this->session->set_flashdata("message","berhasil");
					redirect("index.php/Provinsi","refresh");
				}
			else
				{
					$this->session->set_flashdata("message","gagal");
					redirect("index.php/Provinsi","refresh");
				}
 		}
}