<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Perpustakaan Bapelkes Semarang</title>
  <!--css khusus halaman ini -->
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
  

<!--modal dialog untuk hapus -->
<!--content -->
<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-book"></i> Daftar Buku Kembali</h3>
    <div class="box-tools pull-right">
    
    </div><!-- /.box-tools -->

  </div><!-- /.box-header -->
   <div class="box-body">
   <!--div class="btn-group"><a href="<?php echo base_url(); ?>admin/Kembali/edit"  class="btn btn-success" role="button" data-toggle="tooltip" title="Kembalikan"><i class="fa fa-plus"></i> Kembalikan Buku</a></div-->
   
   <table cellspacing="0"  width="70%">
   <tr><td colspan="3"> <h4><b>Detail Pengembalian Buku</b></h4></td></tr>
   <tr>
      <td width="25%"><h5><b> Nama Peminjam</b> </h5></td>
      <td> <h5><b>:</b></h5></td>
      <td><h5><b><?php foreach ($data_anggota->result_array() as $value) 
           {
             if ($value['id_anggota']==$data_pinjam['id_anggota']) 
             {
                echo $value['nama'];
             }
           } ?>
      </b></h5>
        </td>
    </tr>  
      <tr>
      <td width="25%"><h5><b> Batas pengembalian</b> </h5></td>
      <td> <h5><b>:</b></h5></td>
      <td><h5><b><?php $oridate=$data_pinjam['tgl_kembali'];
                $date=date("d-M-Y",strtotime($oridate));
                echo $date;
              ?>
      </b></h5>
        </td>
    </tr>  
    <tr>
      <td width="25%"><h5><b> Tanggal Pengembalian</b> </h5></td>
      <td> <h5><b>:</b></h5></td>
      <td><h5><b><?php $oridate=$data_pinjam2['tgl_dikembalikan'];
                $date=date("d-M-Y",strtotime($oridate));
                echo $date;
              ?>
      </b></h5>
        </td>
    </tr>  
   </table>
   <div class="form-group"></div>
   <table id="" class="table table-bordered table-hover" cellspacing="0" width="70%">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="10%">ID Buku</th>
                <th>Judul Buku</th>
                <th width="15%">No Buku</th>
            </tr>
        </thead>
        <tbody>
         <?php
  $no = 1;
    foreach($data_detail_pinjam->result_array() as $op)
    {
      if ($op['id_pinjam']==$data_pinjam['id_pinjam']) 
      {
        $buku=$op['id_buku'];
        $no_buku=$op['no_buku'];
        foreach ($data_buku->result_array() as $op2) 
        {
         if($op2['id_buku']==$buku && $op['id_pinjam']==$data_pinjam['id_pinjam'])
          { 
                  ?>
                  <tr>
                      <td><?php echo $no++ ;?></td>
                      <td><?php echo $op['id_buku'];?></td>
                      <td><?php echo $op2['judul'];?></td>
                      <td align="center"><?php echo $op['no_buku'];?></td>
                  </tr>
<?php           }
        }
      }
    }
    ?>
    <tr>
      <td colspan="3" align="right"><b> Jumlah Buku </b></td>
      <td align="right"><?php echo $data_pinjam['total_buku'];?> </td>
    </tr>
    <tr>
      <td colspan="3" align="right"><b> Terlambat</b></td>
      <td align="right"><?php echo $kembali['terlambat'];?> </td>
    </tr>
     <tr>
      <td colspan="3" align="right"><b> Denda (perhari)</b></td>
      <td align="right">Rp. <?php 
                              $id_denda=$kembali['id_denda'];
                              $this->db->where('id_denda',$id_denda);
                              $tt=$this->db->get('tb_denda')->result_array();
                              foreach ($tt as $key => $value11) {
                                echo number_format($value11['denda'],2,",",".")."<br>";
                              } 
                              ?> </td>
    </tr>
    <tr>
      <td colspan="3" align="right"><b> Jumlah denda</b></td>
      <td align="right"><b>Rp.<?php echo number_format($kembali['denda'],2,",",".")."<br>";?></b> </td>
    </tr> 
         </tbody>
    </table>
  </div>
    <div class="box-footer">
    <td>
    <div align ="left"> <a  href="<?php echo base_url(); ?>index.php/beranda/beranda_admin"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Kembali"></i>Back</a></div>
  </td>
  </div>
  <div class="box-footer">
  </div><!-- box-footer -->
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
