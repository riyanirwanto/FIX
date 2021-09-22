<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PERPUSTAKAAN SMA N 1 WARUREJA</title>
	<link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.css')?>">
  <script src="<?php echo base_url('/assets/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/bootstrap.min.js'); ?>"></script>
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
	h2 {
		color: #444;
		background-color: transparent;
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
	h6 {
		color: #333;
		background-color: transparent;
		border-bottom: 2px solid black;
		font-size: 20px;
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
		background-color: white;
		margin: 10px;
		border: 1px solid #333;
		box-shadow: 0 0 8px #333;
		padding-top: 10px;
		padding-left: 10px;
		padding-bottom: 10px;
		padding-right: 10px;
	}
	</style>
</head>
<body>
	<br>
<center><h5>SISTEM INFORMASI PERPUSTAKAAN <b> SMA N 1 WARUREJA</b></h5></center>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">PERPUSTAKAAN SMA N 1 WARUREJA</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="<?php echo base_url(); ?>">Beranda</a></li>
      <li ><a href="<?php echo base_url('index.php/beranda/daftarbuku'); ?>">Daftar Buku</a></li>
      <li class="active"><a href="<?php echo base_url('index.php/beranda/tentang'); ?>">Tentang</a></li>
      <li><a href="<?php echo base_url('index.php/beranda/kalender'); ?>">Kalender</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="<?php echo base_url('index.php/auth'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div id="container"><center>
	
</center>
<h6></h6>
<center><h6>SMA N 1 WARUREJA</h6></center>
<br>
	<table width="100%"> 

                                <tr>
                                    <td ><center><h2>
                                        Alamat     : Jl. AMD NO 4 SUKAREJA<br>
                                        NPSN       : 20325298<br>
                                        Status     : Negri <br>
                                        Akreditasi : B <br>
                                        Jenjang : SMA <br>
                                        </h2>
                                    </center></td>
                                 </tr>
                            </table>


<h6></h6>
	

	


</body>
</html>