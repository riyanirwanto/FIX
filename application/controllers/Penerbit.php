<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penerbit extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        //$this->Security_model->login_check();
    }
	public function index()
    {
         $data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
            $data['data_provinsi'] = $this->Buku_model->getAllData("tb_provinsi");
            $tmp['content']=$this->load->view('layout');
            $this->load->view('penerbit/View_penerbit',$data,$tmp);
            
    }
    public function create()
    {
        $this->form_validation->set_rules('penerbit', 'penerbit', 'trim|required');
                $this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
                if($this->form_validation->run()==FALSE)
                {
                    $data['data_provinsi'] = $this->Buku_model->getAllData("tb_provinsi");
                    $data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
                    $tmp['content']=$this->load->view('layout');
                    $this->load->view('penerbit/Create_penerbit',$data,$tmp);
                    
                }
                else
                {
                    $data = array('id_penerbit' => '',
                                  'nama_penerbit' => $this->input->post('penerbit'),
                                  'id_provinsi' => $this->input->post('provinsi')
                                );
                    $quer=$this->Buku_model->insertData('tb_penerbit',$data);
                    redirect("index.php/Penerbit","refresh");   
                }
    }
    
    public function edit()
    { 
        $id = $this->input->get('id_penerbit',true);    
                $this->form_validation->set_rules('penerbit', 'penerbit', 'trim|required');
                $this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
                if($this->form_validation->run()==FALSE)
                {
                    $data['penerbit'] = $this->Buku_model->get_detail1('tb_penerbit','id_penerbit',$id);
                    $data['data_provinsi'] = $this->Buku_model->getAllData("tb_provinsi");
                    $tmp['content']=$this->load->view('layout');
                    $this->load->view('penerbit/Edit_penerbit',$data,$tmp);
                    
                }
    }
    public function update()
    { 
        $id = $this->input->post('id_penerbit');    
                $this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
                $this->form_validation->set_rules('penerbit', 'penerbit', 'trim|required');
                if($this->form_validation->run()==FALSE)
                {
                    $data['penerbit'] = $this->Buku_model->get_detail1('tb_penerbit','id_penerbit',$id);
                    $data['data_provinsi'] = $this->Buku_model->getAllData("tb_provinsi");
                    $tmp['content']=$this->load->view('layout');
                    $this->load->view('penerbit/Edit_penerbit',$data,$tmp);
                    
                }
                else
                {
                    $id = $this->input->post('id_penerbit');    
                    
                    $data = array(
                                  'nama_penerbit' => $this->input->post('penerbit'),
                                  'id_provinsi' => $this->input->post('provinsi')
                                );
                    $quer=$this->Buku_model->updatepenerbit($data,$id);
                    redirect("index.php/Penerbit","refresh");   
                }
    }
    public function delete()
        {

            $field='id_penerbit';
            $id = $this->input->get('id_penerbit',true);    
            $query = $this->Buku_model->delete('tb_penerbit',$field,$id);                   
            if ($query)
                {
                    $this->session->set_flashdata("message","berhasil");
                    redirect("index.php/Penerbit","refresh");
                }
            else
                {
                    $this->session->set_flashdata("message","gagal");
                    redirect("index.php/Penerbit","refresh");
                }
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */