<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends CI_Controller {
    public function __construct(){
            parent::__construct();
        }
    public function index(){
			$id = $this->input->get('id_anggota',true);
			$field="id_anggota";
  			$this->Buku_model->delete('tb_anggota',$field,$id);					
		      echo "<script>alert('berhasil di hapus');
        			window.location.href='reload';
        			</script>";		
 		}
    public function reload(){
            redirect(base_url("index.php/admin/data_anggota"));
        }
}