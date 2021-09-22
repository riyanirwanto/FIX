<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Perpustakaan Bapelkes Semarang</title>
  
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
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
  color: white;
  </style>
}
</head>
<body>

  
  <br>
<center><h5>SISTEM INFORMASI PERPUSTAKAAN <b>BAPELKES SEMARANG</b></h5></center>

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
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="<?php echo base_url('index.php/auth/logout'); ?>"><center><span class="glyphicon glyphicon-log-in"></span> Logout</center></a></li>
    </ul>
  </div>
</nav>






<div class="container">
  
<!--content -->
<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-plus"></i> <i class="fa fa-book"></i> Kembalikan  Peminjaman</h3>
    <div class="box-tools pull-right">
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
   <div class="box-body">

    <?php if(!empty(validation_errors())){
        echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                <p>Inputan tidak terisi dengan benar. Cek kembali</p>';
                echo validation_errors();
             echo '</div>';

    }?>
    <!--show error message here -->
  <div class="form-group"></div>
  <form class="form-horizontal" method="post"  action="<?php echo base_url(); ?>index.php/Kembali/Kembalikan/<?php echo $data_pinjam['id_pinjam'];?>" role="form">
              <div class="box-body">
                <div class="form-group">
                 <label class="col-sm-2 control-label">Anggota</label>
                 <div class="col-sm-5">
                   <select name="id_anggota" class="js-example-basic-single form-control" disabled="disabled" data-placeholder="Klik untuk memilih">
              <?php foreach($data_anggota->result_array() as $op)
                    {
                      if($op['id_anggota']==$data_pinjam['id_anggota'])
                      {
                      ?>
                        <option value="<?php echo $op['id_anggota'];?>"><?php echo $op['nama'];?></option>
                      
                    </select>
              </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pinjam</label>
                  <div class="col-sm-4">
                    <input type="date" value="<?php echo $data_pinjam['tgl_pinjam'];?>" disabled="disabled" required="required" class="form-control">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kembali</label>
                  <div class="col-sm-4">
                    <input type="date" name="tgl_kembali" value="<?php echo $data_pinjam['tgl_kembali'];?>" disabled="disabled" required="required" class="form-control" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal di Kembalikan</label>
                  <div class="col-sm-4">
                    <!--input type="date" required="required" class="form-control" name="tgl_kembali"-->
                    <input type="input" class="bootstrap-datepicker" name="tgl_dikembali" value="<?php echo "20".date('y-m-d'); ?>" disabled="disabled" >
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
              </div>
              <div class="col-sm-4">
                  <div class="btn-group">
                   <button type="reset" class="btn btn-info"><i class="fa fa-refresh"></i>Reset</button>
        </div>
                   <div class="btn-group">
                   <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-share"></i> Kembalikan</button>
                  </div>
              </div>
              <!-- /.box-footer -->
            </form>




            <?php
if (isset($_POST['submit'])) {

  $id=$op['id_anggota'];
  echo "hai";

                $aa ="SELECT id_pinjam FROM tb_pinjam where id_pinjam=$id";
                $bb = mysqli_query($dbcon, $aa);
                while ($cc= mysqli_fetch_array($bb)) {

                $dd=$cc['id_pinjam'];
                $aa2 ="SELECT id_buku FROM tb_detail_pinjam where id_pinjam=$dd";
                $bb2 = mysqli_query($dbcon, $aa2);
                while ($cc2= mysqli_fetch_array($bb2)) {
                  $dd2=$cc2['id_buku'];
                  $aa2 ="SELECT id_buku FROM tb_detail_pinjam where id_pinjam=$dd2";
                $bb2 = mysqli_query($dbcon, $aa2);
                while ($cc2= mysqli_fetch_array($bb2)) {
                  $aa3 ="SELECT * FROM tb_buku where id_buku=$dd3";
                $bb3 = mysqli_query($dbcon, $aa3);
                while ($cc3= mysqli_fetch_array($bb3)) {
                  $stok=$cc3['tersedia'];
                  $stok2=$cc3['dipinjam'];
                  $hasil=$stok+1;
                  $hasil2=$stok2-1;

                
                  $addd = "UPDATE tb_buku SET tersedia=$hasil,dipinjam=$hasil2 where id_buku=$dd2 ";
                $dbbb= mysqli_query($dbcon,$addd);
               }}}}}

               ?>


               <?php
                      }
                    }
                    ?>
  </div>
    <div class="box-footer">
    <td>
    <div align ="Right"> <a  href="<?php echo base_url(); ?>index.php/beranda/beranda_admin"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Kembali"></i>Back</a></div>
  </td>
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
