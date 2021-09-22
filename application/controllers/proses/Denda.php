<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Denda extends CI_Controller {
	
	public function __construct()
		{
			parent::__construct();
			
		}
	public function index(){
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		/*jika status login Yes dan status admin tampilkan*/
		if(!empty($cek) && $stts=='admin')
		{
			/*layout*/	
			$data['title']='Daftar Denda';
			$data['pointer']="Denda";
			$data['classicon']="fa fa-book";
			$data['main_bread']="Data Denda";
			$data['sub_bread']="Daftar Denda";
			$data['desc']="Data Master Denda, Menampilkan data Denda";
			$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
			/*data yang ditampilkan*/
			$data['data_denda'] = $this->Buku_model->getAllData("tb_denda");
			//$data['isi']=$this->Anggota_model->get_all();
			//$data['js']=$this->load->view('admin/denda/js');
			$this->load->view('admin/denda/View_denda',$data);
			}
	}
	public function create()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
				$this->form_validation->set_rules('denda', 'denda', 'required');
				$this->form_validation->set_rules('status', 'status', 'required');
				if($this->form_validation->run()==FALSE)
				{
					//$data ['err'] = validation_errors();
					$data['title']='Daftar Denda';
					$data['pointer']="Denda";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Data Denda";
					$data['sub_bread']="Tambah Denda";
					$data['desc']="Data Master Denda, Menampilkan data denda";

					/*data yang ditampilkan*/
					$data['data_denda'] = $this->Buku_model->getAllData("tb_denda");
					$tmp['content']=$this->load->view('admin/denda/Create_denda',$data,true);
					}

			 	else
				{
		            $data = array('id_denda' =>'',
		                          'denda' => $this->input->post('denda'),
		                          'status' => $this->input->post('status'),
		                        );
					$query=$this->Buku_model->insertData('tb_denda',$data);
					redirect("admin/Denda/index","refresh");	
				}
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}
	
	public function edit()
	{ 
		$id = $this->input->get('id_denda');	
				$data['denda'] = $this->Buku_model->get_detail1('tb_denda','id_denda',$id);
					$this->load->view('admin/denda/Edit_denda',$data);
				}
 	

 	function update()
{
	$id = $this->input->post('id_denda');
    $booking=array(
        'denda'=>$this->input->post('denda'),
        'status'=>$this->input->post('status')  
        );

    $this->Buku_model->update_record($booking,$id);
    redirect("index.php/admin/data_denda","refresh");
}
 	public function delete()
		{
			
			$id = $this->input->get('id_denda',true);
			$field='id_denda';
  			$query = $this->Buku_model->delete('tb_denda',$field,$id);					
			if ($query)
				{
					$this->session->set_flashdata("message","berhasil");
					redirect("admin/Denda","refresh");
				}
			else
				{
					$this->session->set_flashdata("message","gagal");
					redirect("admin/Denda","refresh");
				}
 		}
}