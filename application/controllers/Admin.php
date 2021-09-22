<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();

		//$this->load->model('Buku_model');
	}

	public function data_anggota()
	{

		$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
			$data['data_kelas'] = $this->Buku_model->getAllData("tb_kelas");
			$data['data_agama'] = $this->Buku_model->getAllData("tb_agama");
			$this->load->view('data_anggota',$data);
		
	}
	public function  data_buku()
	{
		$data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
			$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
			$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
			$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
			$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
			$data['model'] = $this->Buku_model;
			$this->load->view('data_buku',$data);
	}

	public function data_kategori(){
		
		$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
			$this->load->view('data_kategori',$data);
	}

	public function data_rak(){
		$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
			$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
			$this->load->view('data_rak',$data);
	}

	public function data_pengarang(){
		$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
			$this->load->view('data_pengarang',$data);
	}

	public function data_penerbit()
    {
        $data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
            $data['data_provinsi'] = $this->Buku_model->getAllData("tb_provinsi");
            $this->load->view('data_penerbit',$data);
    }

    public function data_provinsi(){
		$data['data_provinsi'] = $this->Buku_model->getAllData("tb_provinsi");
			$this->load->view('data_provinsi',$data);
	}


	public function data_denda(){
		$data['data_denda'] = $this->Buku_model->getAllData("tb_denda");
			$this->load->view('data_denda',$data);

		
	}

public function detail($id_pinjam2=0)
	{
		$id_pinjam1=$this->input->get('id_pinjam');
			if ($id_pinjam1=='') {
				$id_pinjam1=$id_pinjam2;
			}
			if ($id_pinjam1!='') {
				$id = array('id_pinjam' => $id_pinjam1);
				$this->session->set_userdata($id);
				$id_pinjam=$this->session->userdata('id_pinjam');
				//echo $id_pinjam;
			}
	$id_detail_pinjam=$this->session->userdata('id_detail_pinjam');
					$id_pinjam=$this->session->userdata('id_pinjam');
					$data['data_detail_buku'] = $this->Buku_model->getAllData("tb_detail_buku");
					$data['detail_pinjam'] = $this->Buku_model->get_detail1("tb_detail_pinjam","id_detail_pinjam",$id_detail_pinjam);
					$data['pinjam'] = $this->Buku_model->get_detail1("tb_pinjam","id_pinjam",$id_pinjam);
					$data['data_pinjam1'] = $this->Buku_model->getAllData("tb_pinjam");
					$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");


			$data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
			$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
			$data['data_pinjam'] = $this->Buku_model->get_detail1("tb_pinjam","id_pinjam",$id_pinjam1);
			$data['data_detail_pinjam1'] = $this->Buku_model->get_detail123("tb_detail_pinjam","id_pinjam",$id_pinjam1);
			$this->load->view('detail_pinjam',$data);
		
	}

public function createdetail1(){
	$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$this->form_validation->set_rules('id_buku','ID Number','required');
		//$this->form_validation->set_rules('no_buku','Book Number','required');
		if ($this->form_validation->run()==false) {
					$id_pinjam=$this->session->userdata('id_pinjam');

					$data['title']='Input detail Peminjaman';
					$data['pointer']="Pinjam";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Daftar detail Peminjaman";
					$data['sub_bread']="Input detail Peminjaman";
					$data['desc']="form untuk melakukan peminjaman";

					/*data yang ditampilkan*/
					$data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
					$data['pinjam'] = $this->Buku_model->get_detail1("tb_pinjam","id_pinjam",$id_pinjam);
					
					$data['data_detail_buku'] = $this->Buku_model->getAllData("tb_detail_buku");
					$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('create/create1',$data,$tmp);
					}
		else
		{



			$det= array('id_detail_pinjam' => '',
						'id_pinjam'=> $this->session->userdata('id_pinjam'),
						'id_buku'=> $this->input->post('id_buku'),
						'no_buku'=> 0,
						'flag'=> 2);
			$insert=$this->Buku_model->insertData('tb_detail_pinjam',$det);
			$this->db->where('flag',2);
		    $d1=$this->db->get('tb_detail_pinjam')->result();
		    foreach ($d1 as $key1 => $value1)
		    {
		    	
	        	$id_detail_pinjam=$value1->id_detail_pinjam;
		    }
		      $dataa1=array('id_detail_pinjam' => $id_detail_pinjam,
		      				'id_buku' => $this->input->post('id_buku'));
            		$this->session->set_userdata($dataa1);
		            //update status jadi 0 lagi
		            $this->db->set('flag',0);
		            $this->db->where('id_detail_pinjam',$this->session->userdata('id_detail_pinjam'));
		            $this->db->update('tb_detail_pinjam');
		    redirect('index.php/admin/updatedetnobuku');
		}
	
}
	

	public function createdetail2()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$this->form_validation->set_rules('id_buku','ID Number','required');
		//$this->form_validation->set_rules('no_buku','Book Number','required');
		if ($this->form_validation->run()==false) {
					$id_pinjam=$this->session->userdata('id_pinjam');

					$data['title']='Input detail Peminjaman';
					$data['pointer']="Pinjam";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Daftar detail Peminjaman";
					$data['sub_bread']="Input detail Peminjaman";
					$data['desc']="form untuk melakukan peminjaman";

					/*data yang ditampilkan*/
					$data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
					$data['pinjam'] = $this->Buku_model->get_detail1("tb_pinjam","id_pinjam",$id_pinjam);
					
					$data['data_detail_buku'] = $this->Buku_model->getAllData("tb_detail_buku");
					$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
					$tmp['content']=$this->load->view('layout');
					$this->load->view('create/create2',$data,$tmp);
					}
		else
		{
			$det= array('id_detail_pinjam' => '',
						'id_pinjam'=> $this->session->userdata('id_pinjam'),
						'id_buku'=> $this->input->post('id_buku'),
						'no_buku'=> 0,
						'flag'=> 2);
			$insert=$this->Buku_model->insertData('tb_detail_pinjam',$det);
			$det2= array('id_detail_pinjam' => '',
						'id_pinjam'=> $this->session->userdata('id_pinjam'),
						'id_buku'=> $this->input->post('id_buku2'),
						'no_buku'=> 0,
						'flag'=> 2);
			$insert2=$this->Buku_model->insertData('tb_detail_pinjam',$det2);
			$this->db->where('flag',2);
		    $d1=$this->db->get('tb_detail_pinjam')->result();
		    foreach ($d1 as $key1 => $value1)
		    {
	        	$id_detail_pinjam=$value1->id_detail_pinjam;
		    }
		      $dataa1=array('id_detail_pinjam' => $id_detail_pinjam,
		      				'id_buku' => $this->input->post('id_buku'));
            		$this->session->set_userdata($dataa1);
		            //update status jadi 0 lagi
		            $this->db->set('flag',0);
		            $this->db->where('id_detail_pinjam',$this->session->userdata('id_detail_pinjam'));
		            $this->db->update('tb_detail_pinjam');
		    redirect('index.php/admin/updatedetnobuku2');
		}
		
	}

	public function createdetail3($id_pinjam2=0)
	{
		$id_pinjam1=$this->input->get('id_pinjam');
			if ($id_pinjam1=='') {
				$id_pinjam1=$id_pinjam2;
			}
			if ($id_pinjam1!='') {
				$id = array('id_pinjam' => $id_pinjam1);
				$this->session->set_userdata($id);
				$id_pinjam=$this->session->userdata('id_pinjam');
				//echo $id_pinjam;
			}
	$id_detail_pinjam=$this->session->userdata('id_detail_pinjam');
					$id_pinjam=$this->session->userdata('id_pinjam');
					$data['data_detail_buku'] = $this->Buku_model->getAllData("tb_detail_buku");
					$data['detail_pinjam'] = $this->Buku_model->get_detail1("tb_detail_pinjam","id_detail_pinjam",$id_detail_pinjam);
					$data['pinjam'] = $this->Buku_model->get_detail1("tb_pinjam","id_pinjam",$id_pinjam);
					$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");


			$data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
			$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
			$data['data_pinjam'] = $this->Buku_model->get_detail1("tb_pinjam","id_pinjam",$id_pinjam1);
			$data['data_detail_pinjam1'] = $this->Buku_model->get_detail123("tb_detail_pinjam","id_pinjam",$id_pinjam1);
			$this->load->view('create/create3',$data);
		
	}


public function delete_det()
		{
			$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
			$id = $this->input->get('id_detail_pinjam',true);	
			$field='id_detail_pinjam';
			$this->db->where('id_detail_pinjam',$id);
			$dd=$this->db->get('tb_detail_pinjam')->result();
			foreach ($dd as $key => $value) {
				$no=$value->no_buku;
				$id_buku=$value->id_buku;
				$id_pinjam=$value->id_pinjam;
			}
			//update sttat detail buku
			$this->db->set('status',1);
			$this->db->where('id_buku',$id_buku);
			$this->db->where('no_buku',$no);
			$this->db->update('tb_detail_buku');
			// ambil data jumla
			$this->db->where('id_pinjam',$id_pinjam);
			$ww=$this->db->get('tb_pinjam')->result();
			foreach ($ww as $key => $value1) {
				$jum=$value1->total_buku;
				$jum1=$jum-1;
			}
			//kurangi satu jumlah buku
			if ($no !=0 ) {
				# code...
			
			$this->db->set('total_buku',$jum1);
			$this->db->where('id_pinjam',$id_pinjam);
			$this->db->update('tb_pinjam');
			}
  			$query = $this->Buku_model->delete('tb_detail_pinjam',$field,$id);	

  			
    			redirect(base_url("index.php/admin/detail/".$id_pinjam));
    
  }
			
 		
 		
public function createdet()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$this->form_validation->set_rules('id_buku','ID Number','required');
		//$this->form_validation->set_rules('no_buku','Book Number','required');
		if ($this->form_validation->run()==false) {
					$id_pinjam=$this->session->userdata('id_pinjam');

					$data['title']='Input detail Peminjaman';
					$data['pointer']="Pinjam";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Daftar detail Peminjaman";
					$data['sub_bread']="Input detail Peminjaman";
					$data['desc']="form untuk melakukan peminjaman";

					/*data yang ditampilkan*/
					$data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
					$data['pinjam'] = $this->Buku_model->get_detail1("tb_pinjam","id_pinjam",$id_pinjam);
					
					$data['data_detail_buku'] = $this->Buku_model->getAllData("tb_detail_buku");
					$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
					$this->load->view('pinjam/Create_detail_pinjam',$data);
					}
		else
		{
			$det1= array('id' => '',
						'id_buku'=> $this->input->post('id_buku'),
						'nama'=> $this->session->userdata('id_pinjam'));
					$insert1=$this->Buku_model->insertData('apriori',$det1);
			$det= array('id_detail_pinjam' => '',
						'id_pinjam'=> $this->session->userdata('id_pinjam'),
						'id_buku'=> $this->input->post('id_buku'),
						'no_buku'=> 0,
						'flag'=> 2);
			$insert=$this->Buku_model->insertData('tb_detail_pinjam',$det);
			$this->db->where('flag',2);
		    $d1=$this->db->get('tb_detail_pinjam')->result();
		    foreach ($d1 as $key1 => $value1)
		    {
	        	$id_detail_pinjam=$value1->id_detail_pinjam;
		    }
		      $dataa1=array('id_detail_pinjam' => $id_detail_pinjam,
		      				'id_buku' => $this->input->post('id_buku'));
            		$this->session->set_userdata($dataa1);
		            //update status jadi 0 lagi
		            $this->db->set('flag',0);
		            $this->db->where('id_detail_pinjam',$this->session->userdata('id_detail_pinjam'));
		            $this->db->update('tb_detail_pinjam');
		    redirect('index.php/admin/updatedetnobuku');
		}
	}


public function updatedetnobuku()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$this->form_validation->set_rules('no_buku','Book Number','required');
		//$this->form_validation->set_rules('no_buku','Book Number','required');
		if ($this->form_validation->run()==false) {
					$id_detail_pinjam=$this->session->userdata('id_detail_pinjam');
					$id_pinjam=$this->session->userdata('id_pinjam');
					
					$data['data_pinjam'] = $this->Buku_model->getAllData("tb_pinjam");
					$data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
					$data['data_detail_buku'] = $this->Buku_model->getAllData("tb_detail_buku");
					$data['detail_pinjam'] = $this->Buku_model->get_detail1("tb_detail_pinjam","id_detail_pinjam",$id_detail_pinjam);
					$data['pinjam'] = $this->Buku_model->get_detail1("tb_pinjam","id_pinjam",$id_pinjam);
					$data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
					//echo $id_detail_pinjam;
					$this->load->view('pinjam/Create_detail_pinjam_nobuku',$data);
					
		}
		else
		{
		            //update status jadi 0 lagi

					$id_pinjam2=$this->session->userdata('id_pinjam');
					$this->db->set('no_buku',$this->input->post('no_buku'));
		            $this->db->where('id_detail_pinjam',$this->session->userdata('id_detail_pinjam'));
		            $this->db->update('tb_detail_pinjam');
		            //select jum sesuai id pinjam
		            $this->db->where('id_pinjam',$id_pinjam2);
		            $data=$this->db->get('tb_pinjam')->result();
		            foreach ($data as $key => $value) {
		            	$jum=$value->total_buku;
		            	$jum1=$jum+1;
		            	//echo $jum1;
		            }
		            
		            //update jumlah buku
		            $this->db->set('total_buku',$jum1);
		            $this->db->where('id_pinjam',$id_pinjam2);
		            $this->db->update('tb_pinjam');
		            //update status dipinjam
		            $this->db->set('status',0);
		            $this->db->where('id_buku',$this->session->userdata('id_buku'));
		            $this->db->where('no_buku',$this->input->post('no_buku'));
		            $this->db->update('tb_detail_buku');
		            //echo $id_pinjam2;
		    		redirect('index.php/beranda/beranda_admin');
		}
	}
public function apriori(){
	$tmp['content']=$this->load->view('layout');
	$this->load->view('apriori/rule',$tmp);
}
	



}
