<?php
error_reporting(0);
session_start();
  if ($_SESSION['sesion']!=null) 

  {
    ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Inicio </title>
  <link rel="shortcut icon" type="image/x-icon" href="dist/img/iconop.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


        <link href="http://fonts.googleapis.com/css?family=Montserrat|Chewy|Arimo|Yanone+Kaffeesatz" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.2.min.js"></script>

<style type="text/css">
  #demoFont {
font-family: "Trebuchet MS", Helvetica, sans-serif;
font-size: 30px;
letter-spacing: 1.2px;
word-spacing: 1px;
color: #000000;
font-weight: 700;
text-decoration: none;
font-style: normal;
font-variant: small-caps;
text-transform: lowercase;
 background-color: #99dcec;
        text-align: center;

}
</style>


</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
  <!-- ...................................................... AQUÍ TERMINA EL MENÚ LATERAL ......................................................... -->

 <?php

    if ($_SESSION['privilegio']=="doctor") {
         include("barra.php");
    }
    elseif ($_SESSION['privilegio']=="enfermero") {
      include("barra_enf.php");
    }



  ?>



  
<!-- .................INICIA EL CONTENIDO DE LA PÁGINA ........................................-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content container-fluid">

      <div id="demoFont"><center>GynecSys</center></div>

<br>
<!-- SLIDER -->

<center>
<div class='container'>

<div class="ism-slider" data-transition_type="zoom" data-play_type="loop" data-image_fx="zoompan" data-radio_type="thumbnail" id="my-slider">
  <ol>
    <li>
      <img src="ism/image/slides/_u/1568616013580_320165.jpg">
      <div class="ism-caption ism-caption-0">City</div>
    </li>
    <li>
      <img src="ism/image/slides/_u/1568616007567_974222.jpg">
      <div class="ism-caption ism-caption-0">City</div>
    </li>
    <li>
      <img src="ism/image/slides/_u/1568616028496_879877.jpg">
      <div class="ism-caption ism-caption-0">City</div>
    </li>
    <li>
      <img src="ism/image/slides/_u/1568616007431_93612.jpg">
      <div class="ism-caption ism-caption-0">City</div>
    </li>
  </ol>
</div>

</center>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      UTD
    </div>
    <!-- Default to the left -->
    <strong>AutoClient Manager</strong> 2019
  </footer>






  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>




<?php
  }
  
  if ($_SESSION['sesion']==null)
  {
      echo "<script>location.href='login.php'</script>";
  }

?>


