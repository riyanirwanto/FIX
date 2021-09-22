
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }
  public function index(){
    if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
    echo "<script>alert('Akun anda masih terhubung, Selamat datang!!');
        window.location.href='auth/sukses';
        </script>";

    $this->load->view('form_login');
      
  
  }
  public function login(){
    $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    $password = ($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      echo "<script>alert('Username atau Password salah!');
        window.location.href='reload';
        </script>";
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated'=>true, // Buat session authenticated dengan value true
          'username'=>$user->username,  // Buat session username
          'status' => "login",
          'stts'=>$user->stts // Buat session role
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        echo "<script>alert('Berhasil login!');
        window.location.href='sukses';
        </script>";
         // Redirect ke halaman home
      }else{
        echo "<script>alert('Username atau Password salah!');
        window.location.href='reload';
        </script>";
      }
    }
  }
  function reload(){
    redirect(base_url("index.php/beranda/login"));
  }
  function sukses(){
    redirect(base_url("index.php/beranda/beranda_admin"));
    
  }
  public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
    redirect('index.php/auth'); // Redirect ke halaman login
  }
}








