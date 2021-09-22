<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {
	
	public function __construct()
		{
			parent::__construct();
			//$this->Security_model->login_check();
		}
	public function index(){
		$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
			$data['data_kelas'] = $this->Buku_model->getAllData("tb_kelas");
			$data['data_agama'] = $this->Buku_model->getAllData("tb_agama");
			//$data['isi']=$this->Anggota_model->get_all();
			$this->load->view('admin/anggota/View_anggota',$data);
			
	}

	public function tambah_data(){

					$this->db->select('RIGHT(tb_anggota.id_anggota,6) as kode1', FALSE);
		            $this->db->order_by('id_anggota','DESC');
		            $this->db->limit(1);
		            $query = $this->db->get('tb_anggota');
		            //cek dulu apakah ada sudah ada kode di tabel.
		            if($query->num_rows() <> 0)
		            {
		                //jika kode ternyata sudah ada.
		                $data = $query->row();
		                $kode = intval($data->kode1) + 1;
		            }
		            else
		            {
		                //jika kode belum ada
		                $kode = 1;
		            }
		            $kodemax = str_pad($kode, 6, "0", STR_PAD_LEFT);
		            $kodejadi = "ANGG".$kodemax;
		            $data = array('id_anggota' => $kodejadi,
		                          'nama' => $this->input->post('nama'),
		                          'id_kelas' => $this->input->post('kelas'),
		                          'id_agama' => $this->input->post('agama'),
		                          'jenis_kelamin' =>$this->input->post('jk'),
		                          'alamat' => $this->input->post('alamat'),
		                          'hp' => $this->input->post('hp'),
		                          'ket' => $this->input->post('ket'),
		                        );
					$quer=$this->Buku_model->insertData('tb_anggota',$data);
					if ($query)
					{
						//$this->session->set_flashdata("message","berhasil!!!");
						$this->session->set_flashdata("message","berhasil di tambah!!!");
						redirect("index.php/admin/data_anggota","refresh");	
					}
					else
					{
						$this->session->set_flashdata("message","gagal!!!");
						redirect("admin/Anggota/Create_anggota","refresh");	
					}

	}

	public function create()
	{
		if($this->form_validation->run()==FALSE)
				{
					//$data ['err'] = validation_errors();
					$data['title']='Daftar Anggota';
					$data['pointer']="Anggota";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Data Anggota";
					$data['sub_bread']="Input Anggota";
					$data['desc']="Data Master Anggota, Menampilkan data Anggota Perpustakaan";

					/*data yang ditampilkan*/
					$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
					$data['data_kelas'] = $this->Buku_model->getAllData("tb_kelas");
					$data['data_agama'] = $this->Buku_model->getAllData("tb_agama");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('anggota/Create_anggota',$data,$tmp);
					
				}
			 	
		
	}
	

	public function edit()
	{ 
		$id = $this->input->get('id_anggota',true);	
				$this->form_validation->set_rules('nama', 'nama', 'required');
				$this->form_validation->set_rules('kelas', 'kelas', 'required');
				$this->form_validation->set_rules('agama', 'agama', 'required');
				$this->form_validation->set_rules('jk', 'jk', 'required');
				$this->form_validation->set_rules('hp', 'hp', 'required');
				$this->form_validation->set_rules('alamat', 'alamat', 'required');
				if($this->form_validation->run()==FALSE)
				{
					//$data ['err'] = validation_errors();
					$data['title']='Edit Anggota';
					$data['pointer']="Anggota";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Data Anggota";
					$data['sub_bread']="Edit Anggota";
					$data['desc']="Form untuk melakukan edit data Anggota Perpustakaan";

					/*data yang ditampilkan*/
					$data['anggota'] = $this->Buku_model->get_detail1('tb_anggota','id_anggota',$id);
					$data['data_kelas'] = $this->Buku_model->getAllData("tb_kelas");
					$data['data_agama'] = $this->Buku_model->getAllData("tb_agama");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('anggota/Edit_anggota',$data,$tmp);
					
 	}
 }
 	public function update()
	{ 
		$id = $this->input->post('id_anggota');	
				$this->form_validation->set_rules('nama', 'nama', 'required');
				$this->form_validation->set_rules('kelas', 'kelas', 'required');
				$this->form_validation->set_rules('agama', 'agama', 'required');
				$this->form_validation->set_rules('jk', 'jk', 'required');
				$this->form_validation->set_rules('hp', 'hp', 'required');
				$this->form_validation->set_rules('alamat', 'alamat', 'required');
				if($this->form_validation->run()==FALSE)
				{
					//$data ['err'] = validation_errors();
					$data['title']='Edit Anggota';
					$data['pointer']="Anggota";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Data Anggota";
					$data['sub_bread']="Edit Anggota";
					$data['desc']="Form untuk melakukan edit data Anggota Perpustakaan";

					/*data yang ditampilkan*/
					$data['anggota'] = $this->Buku_model->get_detail1('tb_anggota','id_anggota',$id);
					$data['data_kelas'] = $this->Buku_model->getAllData("tb_kelas");
					$data['data_agama'] = $this->Buku_model->getAllData("tb_agama");
					$tmp['content']=$this->load->view('admin/anggota/Edit_anggota',$data,true);
					$this->load->view('admin/layout',$tmp);
				}
 	}

public function update_data(){
	$id = $this->input->post('id_anggota');	

$anggota=array(
        							'nama' => $this->input->post('nama'),
        							'jenis_kelamin' =>$this->input->post('jk'),
		                          'id_kelas' => $this->input->post('kelas'),
		                          'id_agama' => $this->input->post('agama'),
		                          
		                          'alamat' => $this->input->post('alamat'),
		                          'hp' => $this->input->post('hp'),
		                          'ket' => $this->input->post('keterangan')
        );

    $this->Buku_model->update_anggota($anggota , $id);
    
    	redirect("index.php/admin/data_anggota");
    

    	


				
}

 	
}