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
  <title> Médicos </title>
  <link rel="shortcut icon" type="image/x-icon" href="dist/img/icon.png" />
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



        <style type="text/css">
      h1
      {
        font-family: arial, sans-serif;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 2.6pt;
        word-spacing: 0.2pt;
        background-color: #99dcec;
        text-align: center;
      }

      h2
      {
        font-family: arial, sans-serif;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 2.6pt;
        word-spacing: 0.2pt;
        background-color: #A3CAE0;
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
    <section class="content-header">
      <h1>
        Mi Perfil
      </h1>




    </section>
      <!-- Main content -->
    <section class="content container-fluid">

      <?php  
  require("conexion.php");
  $cedula=$_SESSION['id'];

//se recogen los datos de la cedula seleccionada para mostrar los datos en los label y puedan ser modificados, a excepción del campo cédula, ya que es el id de la tabla de médicos
  $sql= mysqli_query($conexion,'SELECT * FROM medico WHERE cedula=\''.$cedula.'\'');

            while ($array=mysqli_fetch_array($sql)) 
            {
              $cedula= $array[0];
              $nombre= $array[1];
              $email= $array[3];
              $contra= $array[2];
              $privilegio=$array[4];
              $estatus=$array[5];
            }
   // $descontra=  rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($contra), base64_decode($cadena), MCRYPT_MODE_CBC, md5(md5($contra))), "\0");
?>
<h2>Doctor(a) <?php echo "$nombre"; ?></h2>


  <div class="register-photo" style="background-color:rgb(224,225,225);">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(img/iniciar.jpg);"></div> 

    <form method="post" action="actualizar_doctor.php">
         
         <div class="form-group">
          Número de Cédula
            <input class="form-control"  type="text" name="cedula" value="<?php echo $cedula ?>" disabled>
            <input type="hidden" name="cedula" value="<?php echo $cedula ?>"> 
          </div>

         <div class="form-group">
          Nombre
            <input class="form-control" type="text" name="nombre" value="<?php echo $nombre ?>" >
        </div>

        <div class="form-group">
          Email
          <input class="form-control" type="email" name="email" value="<?php echo $email ?>" >
        </div>

         <div class="form-group">
          Contraseña
           <input class="form-control" type="password" name="contra" pattern=".{8,}" placeholder="Contraseña (Más de 8 caracteres)" >
        </div>

        <div class="form-group">
          Privilegio
          <select class="form-control" type="text" name="privilegio" placeholder="Privilegio" required>
                
            <option value="doctor">Doctor</option>
            <option value="enfermero">Enfermero</option>
              
          </select>        </div>

         <div class="form-group">
          Estatus
         <select class="form-control" type="text" name="estatus" placeholder="Estatus" required>
                
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
              
          </select>
        </div>



        <div class="form-group">
          <button class="btn btn-primary btn-block" type="submit" style="color: black; background-color:#58afcf;">Actualizar datos</button>
        </div>

    </form>
   </div>
    </div>
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
    <strong>Auto Client Manager</strong> 2019
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
         
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html

<?php
  }
  
  if ($_SESSION['sesion']==null)
  {
      echo "<script>location.href='login.php'</script>";
  }

?>