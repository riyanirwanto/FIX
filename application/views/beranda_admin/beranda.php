<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include'onek.php';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PERPUSTAKAAN SMA N 1 WARUREJA</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->  
  
  <style type="text/css">

  ::selection { background-color: #E13300; color: white; }
  ::-moz-selection { background-color: #E13300; color: white; }

  body {
    background-color: gray;
    margin: 10px;
    font: 13px/20px normal Helvetica, Arial, sans-serif;
    color: #4F5155;
  }
  .panel-info > .panel-heading {
    color: white;
    font-size: 18px;
  background-color: #333;
   border-color: #333;

  }
  .panel-body1 {
      padding: 5px;
      padding-left: 0px;
      padding-right: 40px;
}


  a {
    color: #003399;
    background-color: transparent;
    font-weight: normal;
  }

  h1 {
    color: #444;
    background-color: transparent;
    border-bottom: 2px solid #D0D0D0;
    font-size: 19px;
    font-weight: normal;
    margin: 0 0 14px 0;
    padding: 14px 15px 10px 15px;
  }
  h5 {
    color: white;
    background-color: transparent;
    border-bottom: 2px solid #D0D0D0;
    font-size: 18px;
    font-weight: normal;
    margin: 0 0 14px 0;
    padding: 14px 15px 20px 15px;
  }

  code {
    font-family: Consolas, Monaco, Courier New, Courier, monospace;
    font-size: 12px;
    background-color: #f9f9f9;
    border: 1px solid #D0D0D0;
    color: #002166;
    display: block;
    margin: 14px 0 14px 0;
    padding: 12px 10px 12px 10px;
  }

  #body {
    margin: 0 15px 0 15px;
  }

  table {
    background-color: #333;
    font: 14px normal Helvetica, Arial, sans-serif;
    color: silver;

  }
  p.footer {
    text-align: right;
    font-size: 11px;
    border-top: 1px solid #D0D0D0;
    line-height: 32px;
    padding: 0 10px 0 10px;
    margin: 20px 0 0 0;
  }

  #container {
    margin: 10px;
    border: 1px solid #D0D0D0;
    box-shadow: 0 0 8px #D0D0D0;
  }

  



  .dropdown {
  position: relative;
  display: inline-block;
}
.navbar-nav{
  min-width: 160px;
}

.dropdown-content {
  display: none;
  margin-top: 0px;
  position: absolute;
  background-color: #333;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
  
}

.dropdown:hover .dropdown-content {
  display: block;
  
}
.control-label{
  color: white; }
  
  </style>

</head>
<body>

  
  <br>
<center><h5>SISTEM INFORMASI PERPUSTAKAAN SMA N 1 WARUREJA</h5></center>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">

<a href="<?php echo base_url('index.php/beranda/beranda_admin'); ?>" class="navbar-brand" >Beranda Admin</a>

      <div class="dropdown">
        <ul class="nav navbar-nav">
        <li><a><center>Ke Anggotaan</center></a></li></ul>
          <div class="dropdown-content"><ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('index.php/admin/data_anggota'); ?>">Data Anggota</a></li></ul>
          </div>
        </div>


        <div class="dropdown">
        <ul class="nav navbar-nav">
        <li><a><center>Buku</center></a></li></ul>
          <div class="dropdown-content"><ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('index.php/admin/data_buku'); ?>"> <center>Data Buku</center></a></li>
            <li><a href="<?php echo base_url('index.php/admin/data_kategori'); ?>"> <center>Data Kategori</center></a></li>
            <li><a href="<?php echo base_url('index.php/admin/data_rak'); ?>"> <center>Data Rak</center></a></li>
            <li><a href="<?php echo base_url('index.php/admin/data_pengarang'); ?>"> <center>Data Pengarang</center></a></li>
            <li><a href="<?php echo base_url('index.php/admin/data_penerbit'); ?>"> <center>Data Penerbit</center></a></li>
            <li><a href="<?php echo base_url('index.php/admin/data_provinsi'); ?>"> <center>Data Provinsi</center></a></li>
          </ul>
          </div>
        </div>

        


<ul class="nav navbar-nav">
        <li><a style="min-width: 160px;" href="<?php echo base_url('index.php/admin/data_denda'); ?>"> <center>Denda</center></a></li></ul>

    </ul>

  <ul class="nav navbar-nav">
        <li><a style="min-width: 160px;" href="<?php echo base_url('index.php/admin/apriori'); ?>"> <center>Apriori</center></a></li></ul>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="<?php echo base_url('index.php/auth/logout'); ?>"><center><span class="glyphicon glyphicon-log-in"></span> Logout</center></a></li>
    </ul>
  </div>
</nav>






<div class="container">
  <div class="card direct-chat direct-chat-primary">
    
    <div class="card-footer">
                <div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h5 class="box-title"></i> <center>Data Peminjaman Saat Ini</center></h5>
    <div class="box-tools pull-right">
    
    </div><!-- /.box-tools -->
  <div class="box-footer">
  <div class="btn-group">
    <td>
     <div align ="left"  >
      <a  href="<?php echo base_url(); ?>index.php/beranda/beranda_admin"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Data Kembali"></i>Data Pinjam</a>&nbsp
      <a  href="<?php echo base_url(); ?>index.php/beranda/laporan"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Data Pinjam"></i>Laporan Pengembalian</a>&nbsp
      <a  href="<?php echo base_url(); ?>index.php/beranda/data_pengembalian"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Data Kembali"></i>Data Kembali</a>
      </div>
   </td>
  </div>
  </div>
  </div><!-- /.box-header -->
  <br>
   <div class="box-body">







<form class="form-horizontal" method="post"  action="" role="form">
    <div class="form-group">
                 <label class="col-sm-2 control-label">Nama Anggota</label>
                 <div class="col-sm-4">
                   <select name="id_anggota" class="js-example-basic-single form-control" placeholder="Klik untuk memilih" /required>
<?php
    $sql ="SELECT * FROM tb_anggota";
    $sqlcon = mysqli_query($dbcon, $sql);
    while ($op= mysqli_fetch_array($sqlcon)) {
?>
              
                    <option value="<?php echo $op['id_anggota'];?>"><?php echo $op['nama'];?></option>
                    <?php } ?>
                    </select>
              </div>

              <div class="col-sm-2">
                  <div class="btn-group">
                   <button type="reset" class="btn btn-info"><i class="fa fa-refresh"></i>Reset</button>
                  </div>
                   <div class="btn-group">
                   <button type="submit" name="submit" value="simpan" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</button>
                  </div>
              </div>
               
              </div>
   <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kembali</label>
                  <div class="col-sm-4">
                    <input type="date" class="bootstrap-datepicker" name="tgl_kembali" /required>
                  </div>



                </div> 
    



 </form>  

<?php
if (isset($_POST['submit'])) {

  $tglpinjam=date('y-m-d');
  $id_anggota= $_POST['id_anggota'];
  $tglkembali= $_POST['tgl_kembali'];
  $ttlbuku=0;
  $status=0;

  $cek="SELECT id_anggota FROM tb_pinjam WHERE status=0 and id_anggota='$id_anggota'";
$cek_proses= mysqli_query($dbcon,$cek);
$data = mysqli_fetch_array($cek_proses, MYSQLI_NUM);
if($data>0){
echo "<script>alert('id sudah ada')</script>";
}
else if($data<1){
  
  $sql = "INSERT INTO tb_pinjam( tgl_pinjam, id_anggota, tgl_kembali, total_buku, status) VALUES ('$tglpinjam','$id_anggota','$tglkembali',$ttlbuku,$status)";

                                    $query = mysqli_query($dbcon,$sql);
                                    if ($query) {
                                        echo "<script>alert('berhasil menyimpan data')</script>";
                                    }else{
                                        echo "<script>alert('Gagal menyimpan data')</script>";

                                    }

                                }
                              }
                                  ?>





<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama Siswa" title="Type in a name"><br><br>
   <table id="example" class="table table-bordered table-hover" cellspacing="0" width="100%">
     <thead>
            <tr> 
                <th>No</th>
                <th>Tanggal Pinjam</th>
                <th>ID Siswa</th>
                <th>Nama Siswa</th>
                <th>Tanggal Kembali</th>
                <th>Total Buku</th>
                <th>Status</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Tanggal Pinjam</th>
                <th>ID Siswa</th>
                <th>Nama Siswa</th>
                <th>Tanggal Kembali</th>
                <th>Total Buku</th>
                <th>Status</th>
                <th>Pilihan</th>
            </tr>
        </tfoot>
        <tbody>

<?php
$no = 1;
    $sqll ="SELECT * FROM tb_pinjam";
    $sqlconn = mysqli_query($dbcon, $sqll);
    while ($op= mysqli_fetch_array($sqlconn)) {
      if ($op['status']!=1) {
?>

         
            <tr>
                <td><?php echo $no++ ;?></td>
                <?php $oridate=$op['tgl_pinjam'];
                $date=date("d-M-Y",strtotime($oridate));?>
                <td><?php echo $date;?></td>
                <td><?php echo $op['id_anggota'];?></td>
                <td>
<?php
    $sql ="SELECT * FROM tb_anggota";
    $sqlcon = mysqli_query($dbcon, $sql);
    while ($op2= mysqli_fetch_array($sqlcon)) {
      $nama=$op['id_anggota'];
      if($op2['id_anggota']==$nama){
        echo $op2['nama'];
      }
    }
?>
                </td>
                 <?php $oridate2=$op['tgl_kembali'];
                $date2=date("d-M-Y",strtotime($oridate2));?>
                <td><?php echo $date2;?></td>
                <td><?php echo $op['total_buku'];?></td>
   
                <td><?php $status=$op['status'];

                if($status==1){
                          echo '<span class="label label-success">Semua kembali</span>';
                      }
                      else{
                        echo '<span class="label label-danger">Belum Kembali</span>';
                      }
               
                    ?></td> 

                
                <td width="15.5%">
                  <a class="btn btn-info" href='pinjam/?id_pinjam=<?=$op['id_pinjam'];?>'>lihat</a>
                <?php  
                    
                    
  
                     
                    
                    
                    if ($op['total_buku']>0) {
                      echo 
                     '<br><br><a href="'.base_url().'index.php/kembali/?id_pinjam='.$op['id_pinjam'].'" class="btn btn-warning" role="button" data-toggle="tooltip" title="Kembalikan">Dikembalikan</a>';

                    }
                    echo
                '</td>
            </tr>';?>
<?php
    }
    }
  ?>            
         </tbody>
    </table>
  </div>
    </div>
  </div>
  &nbsp
  </div>
    </div>
  </div>












</div>





<script>

$(document).ready(function() {
  $(".js-example-basic-single").select2();
});
</script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>


</body>
</html>



<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }


}
</script>