<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include'onek.php';
$id = $_GET['id_pinjam'];

$sqlll ="SELECT * FROM tb_pinjam where id_pinjam=$id";
        $sqlconnn = mysqli_query($dbcon, $sqlll);
        while ($data_pinjam= mysqli_fetch_array($sqlconnn)) {
    $a=$data_pinjam['id_anggota'];
        $sqll ="SELECT * FROM tb_anggota where id_anggota='$a'";
        $sqlconn = mysqli_query($dbcon, $sqll);
        while ($value= mysqli_fetch_array($sqlconn)) {

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PERPUSTAKAAN SMA N 1 WARUREJA</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">

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
.box-title{
  color: white;
}
.control-label{
  color: white;
}  
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





 
<!--content -->
<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-book"></i> Tambah Peminjaman Buku</h3>
    <div class="box-tools pull-right">
    
    </div><!-- /.box-tools -->

  </div><!-- /.box-header -->
   
   

<form method="post"  action="?id_pinjam=<?=$id;?>" role="form">
              
                
<label><b style="color:white;">Nama Peminjam</b></label>
  <input type="text" name="peminjam" value="<?php echo $value['nama']; ?>" disabled="disabled" ><br><br>

<label><b style="color:white;">Nama Buku 1</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <select name="buku1" data-placeholder="Klik untuk memilih" style="width:300px;" /required>
<?php 
$sqlbuku = "SELECT * FROM tb_buku";
$buku = mysqli_query($dbcon,$sqlbuku);
while ($query=mysqli_fetch_array($buku)) {
?>
                              
<option value="<?php echo $query['id_buku'];?>"  selected><?php echo $query['judul'];?></option>
<?php } ?>
</select><br>
              
<label><b style="color:white;">Jumlah Buku 1</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="number" name="jumlah1" value="">
                
<input type="submit" name="tambah1buku" class=" btn btn-primary " value="Tambah 1 buku" placeholder="submit">
<br><br>
<label><b style="color:white;">Nama Buku 2</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <select name="buku2" data-placeholder="Klik untuk memilih" style="width:300px;" /required>
    <?php 
$sqlbuku = "SELECT * FROM tb_buku";
$buku = mysqli_query($dbcon,$sqlbuku);
while ($query=mysqli_fetch_array($buku)) {
?>
                              
<option value="<?php echo $query['id_buku'];?>"  selected><?php echo $query['judul'];?></option>
<?php } ?>
</select><br>
              

                
                <label><b style="color:white;">Jumlah Buku 2</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   <input type="number" name="jumlah2" value="" >
                

                <input type="submit" name="tambah2buku" class=" btn btn-primary " value="Tambah 2 buku" placeholder="submit"><br><br>


        

    
                
            


</form>



<?php
if (isset($_POST['tambah1buku'])) {

  $nama = $value['nama'];
  $buku1= $_POST['buku1'];

  $jumlah1= $_POST['jumlah1'];
  $flag=2;
  if ($jumlah1>0) {
    $a ="SELECT * FROM tb_buku where id_buku='$buku1'";
    $b = mysqli_query($dbcon, $a);
    while ($c= mysqli_fetch_array($b)) {
      
            $cekkk="SELECT id_buku FROM tb_detail_pinjam WHERE id_buku = '$buku1' and flag='2' and id_pinjam=$id";
            $cek_proses= mysqli_query($dbcon,$cekkk);
            $data = mysqli_fetch_array($cek_proses, MYSQLI_NUM);
            if($data>1){
              echo "<script>alert('sudah ada')</script>";
            }elseif ($data<1) {
              $d=$c['tersedia'];
              $e=$c['dipinjam'];
                if ($d>0) {
                  $f=$d-$jumlah1;
                  $g=$e+$jumlah1;
                  $h = "UPDATE tb_buku SET tersedia=$f, dipinjam=$g where id_buku='$buku1' ";
                  $i = mysqli_query($dbcon,$h);
                  if ($i) {
              # code...
            

                $add = "INSERT INTO tb_detail_pinjam( id_pinjam, id_buku, no_buku, flag) VALUES ($id,'$buku1',$jumlah1,$flag)";
                $db= mysqli_query($dbcon,$add);

                $addapriori = "INSERT INTO apriori( id_buku, nama) VALUES ($buku1,$id)";
                $dbapriori= mysqli_query($dbcon,$addapriori);

                $aa ="SELECT * FROM tb_pinjam where id_pinjam=$id";
                $bb = mysqli_query($dbcon, $aa);
                while ($cc= mysqli_fetch_array($bb)) {
                $dd=$cc['total_buku'];
                $ee=$dd+1;
                  $addd = "UPDATE tb_pinjam SET total_buku=$ee where id_pinjam=$id ";
                $dbbb= mysqli_query($dbcon,$addd);
                echo "<script>alert('berhasil')</script>"; 
               }


               
                  # code...
                }
              
              
  

    }

  }else{
    echo "<script>alert('stok habis')</script>";
  }

}
}else{
  echo "<script>alert('isi jumlah pinjam buku dengan benar')</script>";
}
}
  ?>
  


<?php
if (isset($_POST['tambah2buku'])) {

  $nama = $value['nama'];
  $buku1= $_POST['buku1'];
  $jumlah1= $_POST['jumlah1'];
  $buku2= $_POST['buku2'];
  $jumlah2= $_POST['jumlah2'];
  $flag=2;
  if ($buku1!=$buku2) {
    # code...
  
  if ($jumlah1>0) {
    if ($jumlah2>0) {
    $a ="SELECT * FROM tb_buku where id_buku='$buku1'";
    $b = mysqli_query($dbcon, $a);
    while ($c= mysqli_fetch_array($b)) {
      $a2 ="SELECT * FROM tb_buku where id_buku='$buku2'";
      $b2 = mysqli_query($dbcon, $a2);
      while ($c2= mysqli_fetch_array($b2)) {
            $cekkk="SELECT id_buku FROM tb_detail_pinjam WHERE id_buku = '$buku1' and flag='2' and id_pinjam=$id";
            $cekkk2="SELECT id_buku FROM tb_detail_pinjam WHERE id_buku = '$buku2' and flag='2' and id_pinjam=$id";
            $data = mysqli_fetch_array($cek_proses, MYSQLI_NUM);
            $cek_proses2= mysqli_query($dbcon,$cekkk2);
            $data2 = mysqli_fetch_array($cek_proses2, MYSQLI_NUM);
            if($data>1){echo "<script>alert('data buku 1 sudah ada')</script>";}
            elseif($data2>1){echo "<script>alert('data buku 2 sudah ada')</script>";}
            else{
              $d=$c['tersedia'];
              $e=$c['dipinjam'];
              $d2=$c2['tersedia'];
              $e2=$c2['dipinjam'];
                if ($d>0) {
                  if ($d2>0) {
                  $f=$d-$jumlah1;
                  $g=$e+$jumlah1;
                  $f2=$d2-$jumlah2;
                  $g2=$e2+$jumlah2;
                $h = "UPDATE tb_buku SET tersedia=$f, dipinjam=$g where id_buku='$buku1' ";
                $h2 = "UPDATE tb_buku SET tersedia=$f2, dipinjam=$g2 where id_buku='$buku2' ";
                $add = "INSERT INTO tb_detail_pinjam( id_pinjam, id_buku, no_buku, flag) VALUES ($id,'$buku1',$jumlah1,$flag)";
                $add2 = "INSERT INTO tb_detail_pinjam( id_pinjam, id_buku, no_buku, flag) VALUES ($id,'$buku2',$jumlah2,$flag)";
                $aa ="SELECT * FROM tb_pinjam where id_pinjam=$id";
                $addapriori = "INSERT INTO apriori( id_buku, nama) VALUES ($buku1,$id)";
                $dbapriori= mysqli_query($dbcon,$addapriori);
                $addapriori2 = "INSERT INTO apriori( id_buku, nama) VALUES ($buku2,$id)";
                $dbapriori2= mysqli_query($dbcon,$addapriori2);
                $bb = mysqli_query($dbcon, $aa);
                $db= mysqli_query($dbcon,$add);
                $db2= mysqli_query($dbcon,$add2);
                $i2 = mysqli_query($dbcon,$h2);
                $i = mysqli_query($dbcon,$h);
                while ($cc= mysqli_fetch_array($bb)) {
                  $dd=$cc['total_buku'];
                  $ee=$dd+2;
                  $addd = "UPDATE tb_pinjam SET total_buku=$ee where id_pinjam=$id ";
                  $dbbb= mysqli_query($dbcon,$addd);
                echo "<script>alert('berhasil')</script>";}  
}else{echo "<script>alert('stok buku 2 habis')</script>";}
}else{echo "<script>alert('stok buku 1 habis')</script>";}}}}
}else{echo "<script>alert('isi jumlah pinjam buku 2 dengan benar')</script>";}
}else{echo "<script>alert('isi jumlah pinjam buku 1 dengan benar')</script>";}
}else{echo "<script>alert('buku 1 tidak boleh sama dengan buku 2')</script>";}
}
  ?>
  









   <div class="form-group"></div>
   <table cellspacing="0"  width="70%">
   <tr><td colspan="3"> <h4><b>Detail Peminjaman Buku</b></h4></td></tr>
   <tr>
      <td width="25%"><h5><b> Nama Peminjam</b> </h5></td>
      <td> <h5><b>:</b></h5></td>
      <td><h5><b>

<?php



          echo $value['nama'];
        
            ?>
      </b></h5>
        </td>
    </tr>  
      <tr>
      <td width="25%"><h5><b> Tanggal Pinjam</b> </h5></td>
      <td> <h5><b>:</b></h5></td>
      <td><h5><b><?php $oridate=$data_pinjam['tgl_pinjam'];
                $date=date("d-M-Y",strtotime($oridate));
                echo $date;
              ?>
      </b></h5>
        </td>
    </tr>  
    <tr>
      <td width="25%"><h5><b> Tanggal Kembali</b> </h5></td>
      <td> <h5><b>:</b></h5></td>
      <td><h5><b><?php $oridate=$data_pinjam['tgl_kembali'];
                $date=date("d-M-Y",strtotime($oridate));
                echo $date;
              

             
             
           }?>
      </b></h5>
        </td>
    </tr>  
   </table>
   <table id="example2" class="table table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Buku</th>
                <th>Jumlah Buku</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Buku</th>
                <th>Jumlah Buku</th>
                <th>Pilihan</th>
            </tr>
        </tfoot>
        <tbody>
         <?php
  $no = 1;


  $sq ="SELECT * FROM tb_detail_pinjam where id_pinjam=$id";
        $sq = mysqli_query($dbcon, $sq);
        while ($op= mysqli_fetch_array($sq)) {

    
    ?>
            <tr>
                <td><?php echo $no++ ;?></td>
                <td width="50%" ><?php 
$sqq ="SELECT * FROM tb_buku";
        $sqlco = mysqli_query($dbcon, $sqq);
        while ($op2= mysqli_fetch_array($sqlco)) {

if($op2['id_buku']==$op['id_buku']){
                          echo $op2['judul'];
                      }
                    }?>
                </td>
                <td width="10%"><?php echo $op['no_buku'];?></td>
                <td>



<?php echo '<div class="btn-group">
<a href="'.base_url().'index.php/lihat/?id_detail_pinjam='.$op['id_detail_pinjam'].'&id_pinjam='.$data_pinjam['id_anggota'].'" class="btn btn-danger btn-ok" >Hapus</a>
                    

                </td>
            </tr>';?>

<?php } ?>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
                </div>
            
                <div class="modal-body">
                    <p>Anda akan menghapus Detail Peminjaman buku ini</p>
                    <p><strong>Peringatan</strong>  Setelah data dihapus, data tidak dapat dikembalikan!</p>
                    <br />
                    <p>Ingin melanjutkan menghapus?</p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    
                    <?php echo 
                    '<a href="'.base_url().'index.php/admin/delete_det/?id_detail_pinjam='.$op['id_detail_pinjam'].'&id_buku='.$op['id_buku'].'" class="btn btn-danger btn-ok" >Hapus</a>
                    ';?> 
                </div>
            </div>
        </div>
    </div>



<?php
    }
  ?>            
         </tbody>
    </table>
  </div>
 
  
</div><!-- /.box -->


 

  </div>















<script src="<?php echo base_url('plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->  
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?php echo base_url('plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('plugins/moment/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('dist/js/demo.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('dist/js/pages/dashboard.js'); ?>"></script>


</body>
</html>








