<!--css khusus halaman ini -->



<!--modal dialog untuk hapus -->






<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PERPUSTAKAAN SMA N 1 WARUREJA</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    font-size: 24px;
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


  p.footer {
    text-align: right;
    font-size: 11px;
    border-top: 1px solid #D0D0D0;
    line-height: 32px;
    padding: 0 10px 0 10px;
    margin: 20px 0 0 0;
  }
  table {
    background-color: #333;
    font: 14px normal Helvetica, Arial, sans-serif;
    color: silver;

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
    <h5 class="box-title"><i class="fa fa-book"></i> <center>Daftar Provinsi</center></h5>
    <div class="box-tools pull-right">
    
    </div><!-- /.box-tools -->

  </div><!-- /.box-header -->
   <div class="box-body">
   <div class="btn-group"><a href="<?php echo base_url(); ?>index.php/provinsi/create"  class="btn btn-success" role="button" data-toggle="tooltip" title="Tambah provinsi"><i class="fa fa-plus"></i>  Tambah Provinsi</a>
&nbsp&nbsp&nbsp&nbsp 

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama Provinsi" title="Type in a name">

   </div>
   <div class="form-group"></div>
   <table id="example" class="table table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th width="5%">No</th>
                <!--th class="center"> <i class="glyphicon glyphicon-plus"></i></th-->
                <th width="25%">Nama_provinsi</th>
                <th width="60%">Kota</th>
                <th width="15%">Pilihan</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
               <th width="5%">No</th>
                <!--th class="center"> <i class="glyphicon glyphicon-plus"></i></th-->
                <th width="25%">Nama_provinsi</th>
                <th width="60%">Kota</th>
                <th width="15%">Pilihan</th>
            </tr>
        </tfoot>
        <tbody>
         <?php
  $no = 1;
    foreach($data_provinsi->result_array() as $op)
    {
    ?>
            <tr>
                <td><?php echo $no++ ;?></td>
                <!--td class="details-control"><i class="btn btn-box-tool" data-toggle="tooltip" title="Tampilkan Detail"><i class="glyphicon glyphicon-plus"></i></i>
                </td-->
                <td><?php echo $op['nama_provinsi'];?></td>
                <td><?php echo $op['kota'];?></td>
                <td>
                <?php echo '<div class="btn-group">
<span data-toggle="modal">
<a href="'.base_url().'index.php/Provinsi/edit/?id_provinsi='.$op['id_provinsi'].'" class="btn btn-warning" role="button" 
data-toggle="tooltip" data-placement="top" title="Edit">Edit</i></a>
</span>



<a href="'.base_url().'index.php/Provinsi/delete/?id_provinsi='.$op['id_provinsi'].'" class="btn btn-danger btn-ok" >Hapus</a>
                    

                </td>
            </tr>';?>
<?php
    }
  ?>            
         </tbody>
    </table>
  </div>
  </div></div>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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


</body>
</html>