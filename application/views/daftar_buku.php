<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include'onek.php';
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

  table {
    background-color: #333;
    font: 14px normal Helvetica, Arial, sans-serif;
    color: silver;

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

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
	<br>
<center><h5>SISTEM INFORMASI PERPUSTAKAAN SMA N 1 WARUREJA</h5></center>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url('index.php/beranda'); ?>">PERPUSTAKAAN SMA N 1 WARUREJA</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="<?php echo base_url('index.php/beranda'); ?>">Beranda</a></li>
      <li class="active"><a href="<?php echo base_url('index.php/beranda/daftarbuku'); ?>">Daftar Buku</a></li>
      <li><a href="<?php echo base_url('index.php/beranda/tentang'); ?>">Tentang </a></li>
      <li><a href="<?php echo base_url('index.php/beranda/kalender'); ?>">Kalender</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="<?php echo base_url('index.php/auth'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> 
<div class="container">
<center><h5> DAFTAR BUKU</h5></center>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="CARI JUDUL BUKU" title="Type in a name">

  <br><br>
<table id="table-buku" class="table table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>No Inven</th>
                
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Stok Tersedia</th>
                <th>Stok Dipinjam</th>
                <th>No. Rak</th>
                <th>Tahun Terbit</th>
                <th>Stock</th>
                
                
            </tr>
        </thead>
        
        <tbody>
         <?php
  $no = 1;
    $sql ="SELECT * FROM tb_buku";
    $sqlcon = mysqli_query($dbcon, $sql);
    while ($op= mysqli_fetch_array($sqlcon)) {
                                        
                                        
                                    
    ?>
            <tr>
                <td><?php echo $no++ ;?></td>
                <td><?php echo $op['id_buku'];?></td>
                <td><?php echo $op['judul'];?></td>
                <td>
<?php               
$ktg=$op['id_kategori'];
$sql2 ="SELECT * FROM tb_kategori where id_kategori=$ktg";
    $sqlcon2 = mysqli_query($dbcon, $sql2);
    while ($op2= mysqli_fetch_array($sqlcon2)) {
      echo $op2['kategori'];
    }

 ?>                                        
           

                </td>
                <td>
                  
<?php               
$pnr=$op['id_penerbit'];
$sql3 ="SELECT * FROM tb_penerbit where id_penerbit=$pnr";
    $sqlcon3 = mysqli_query($dbcon, $sql3);
    while ($op3= mysqli_fetch_array($sqlcon3)) {
      echo $op3['nama_penerbit'];
    }

 ?>

                </td>
                <td>

<?php               
$png=$op['id_pengarang'];
$sql4 ="SELECT * FROM tb_pengarang where id_pengarang=$png";
    $sqlcon4 = mysqli_query($dbcon, $sql4);
    while ($op4= mysqli_fetch_array($sqlcon4)) {
      echo $op4['nama_pengarang'];
    }

 ?>

                </td>
                    <td><?php echo $op['tersedia']; ?></td>
                    <td><?php echo $op['dipinjam']; ?></td>
                <td><?php echo $op['no_rak'];?><?php echo $op['no_rak'];?></td>
                <td><?php echo $op['thn_terbit']; ?></td>
                <td><?php echo $op['stok'];?></td>
                
            </tr>
<?php
    }
  ?>            
         </tbody>
    </table>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table-buku");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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

