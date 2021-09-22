<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PERPUSTAKAAN SMA N 1 WARUREJA</title>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <script src="../assets/jquery.min.js"></script>
  <script src="../assets/bootstrap.min.js"></script>
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
      <li class="active"><a href="<?php echo base_url('index.php/beranda'); ?>">Beranda</a></li>
      <li><a href="<?php echo base_url('index.php/beranda/daftarbuku'); ?>">Daftar Buku</a></li>
      <li><a href="<?php echo base_url('index.php/beranda/tentang'); ?>">Tentang</a></li>
      <li><a href="<?php echo base_url('index.php/beranda/kalender'); ?>">Kalender</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="<?php echo base_url('index.php/auth'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<div class="row">
                </div>

<div class="">
                      <div class="notice-board">
                        <div class="panel panel-info">
                        <div class="panel-heading">
                            PERPUSTAKAAN SMA N 1 WARUREJA
                        </div>
                                <div class="panel-body1">
                                <ul align="justify">
                                Perpustakaan merupakan upaya untuk memelihara dan meningkatkan efisiensi dan efektifitas proses belajar-mengajar. Perpustakaan yang terorganisir secara baik dan sisitematis, secara langsung atau pun tidak langsung dapat memberikan kemudahan bagi proses belajar mengajar di instansi tempat perpustakaan tersebut berada. Hal ini, trekait dengan kemajuan bidang pendidikan dan dengan adanya perbaikan metode belajar-mengajar yang dirasakan tidak bisa dipisahkan dari masalah penyediaan fasilitas dan sarana pendidikan.
                               </ul>  

                            </div>
                        </div>
                    </div>

</body>
</html>