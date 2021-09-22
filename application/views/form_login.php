<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- For Search Engine Meta Data  -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="yoursite.com" />

    <title></title>

    <!-- Favicon -->
    


    <!-- Main structure css file -->
    <link  rel="stylesheet" href="<?php echo base_url(); ?>jsjs/bootstrap.min.css">
    <link  rel="stylesheet" href="<?php echo base_url(); ?>jsjs/login-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        body{   
        background-color: gray;
        }
        .authfy-login{
            box-shadow: 10px 0 15px #333;
            margin-top: 72px;
            margin-bottom: 70px;
        }
        .authfy-panel{

                margin-top: 70px;
            margin-bottom: 70px;
        }
        .btn-primary {
    background-color: gray;
        
    border-color: silver;
}


    </style>
</head>

<body>
<form method="post" action="<?php echo base_url('index.php/auth/login'); ?>">
<!-- Start Preloader -->
<div id="preload-block">
    <div class="square-block"> <!--animasi-->
        
    </div>
</div>
<!-- Preloader End -->

<div class="container-fluid">
    <div class="row1">
        <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
            <!-- login start -->
            <div class="authfy-login">
                <!-- panel-login start -->
                <div class="authfy-panel panel-login text-center active">
                    <div class="authfy-heading">
                        <h3 class="auth-title">Login PERPUSTAKAAN</h3>
                        
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                                <div class="form-group wrap-input">
                                    <input type="text" name="username" class="form-control"  required="required" placeholder="Username">
                                    <span class="focus-input"></span>
                                </div>
                                <div class="form-group wrap-input">
                                    <div class="pwdMask">
                                        <input type="password" name="password" class="form-control"  required="required" placeholder="Password">
                                        <span class="focus-input"></span>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" class="tombol_login" value="LOGIN">Login</button>
                                </div></form>

                                
                                    <a href="<?php echo base_url(); ?>index.php/beranda">Kembali Ke Beranda</a>
                               
                                
                                
                            
                        </div>
                    </div>
                </div> <!-- ./panel-login -->




                
            </div> <!-- ./authfy-login -->
        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->
<!-- Javascript Files -->

<!-- initialize jQuery Library -->
<script src="<?php echo base_url(); ?>jsjs/jquery-2.2.4.min.js"></script>

<!-- for Bootstrap js -->
<script src="<?php echo base_url(); ?>jsjs/bootstrap.min.js"></script>

<!-- Custom js-->
<script src="<?php echo base_url(); ?>jsjs/custom.js"></script>

</body>
</html>
