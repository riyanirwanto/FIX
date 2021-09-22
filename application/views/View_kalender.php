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
      <a class="navbar-brand" href="<?php echo base_url('index.php/beranda'); ?>">PERPUSTAKAAN SMA N 1 WARUREJA</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="<?php echo base_url('index.php/beranda'); ?>">Beranda</a></li>
      <li ><a href="<?php echo base_url('index.php/beranda/daftarbuku'); ?>">Daftar Buku</a></li>
      <li class=""><a href="<?php echo base_url('index.php/beranda/tentang'); ?>">Tentang</a></li>
      <li ><a href="<?php echo base_url('index.php/beranda/kalender'); ?>">Kalender</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="<?php echo base_url('index.php/auth'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div id="">
                <div class="col-lg">
                      <div class="notice-board">
                        <div class="panel panel-info">
                        <div class="panel-heading">
        
                            <?php
                                $years= date ("m");
                                $month= date ("m");
                                 echo "Kalender&nbsp ".date(" M Y",mktime(0,0,$month,$years));
                            ?> 
                            
                        </div>
                                <div class="panel-body">
                                <?php
                                $month= date ("m");
                                $year=date("Y");
                                $day=date("d");
                                $endDate=date("t");
                                echo '<font face="arial" size="4" color="black"> ';
                                echo '<table align="center" border="0" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
                                echo "Hari ini : ".date("d / F / Y ");
                                echo '<p>';
                                echo '</td></tr></table>';
                                echo '<table width="100%" align="center" border="0" cellpadding=1 cellspacing=1">
                                <tr bgcolor="gray">
                                <td align=center><font color=red size=2.5>Minggu</font></td>
                                <td align=center><font color=white size=2.5>Senin</td>
                                <td align=center><font color=white size=2.5>Selasa</td>
                                <td align=center><font color=white size=2.5>Rabu</td>
                                <td align=center><font color=white size=2.5>Kamis</td>
                                <td align=center><font color=white size=2.5>Jumat</td>
                                <td align=center><font color=white size=2.5>Sabtu</td>
                                </tr>';
                                $s=date ("w", mktime (0,0,0,$month,1,$year));
                                for ($ds=1;$ds<=$s;$ds++) {
                                echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFF\">
                                </td>";}
                                for ($d=1;$d<=$endDate;$d++) {
                                if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
                                $fontColor="#000000";
                                if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
                                echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
                                if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
                                echo '</table>';
                                ?>

                            </div>
                        </div>
                    </div>
</body>
</html>
