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
  <title> Historial de Consultas </title>
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
        background-color: #4e9ebb;
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

      <h1>Modificar Paciente</h1>

    </section>
      <!-- Main content -->
    <section class="content container-fluid">

<?php  

//como se ha explicado, aquí es dónde se recogen los datos del paciente que se van a modificar, estos se toman a partir de su id, y se muestran en el formulario de modificar los datos, se muestran los originales en la vista, y los únicos que no se pueden modificar es el de número de citología y el id del paciente registrado
	require("conexion.php");
	$id=$_GET['id'];

	$sql= mysqli_query($conexion,'SELECT * FROM paciente WHERE id_paciente=\''.$id.'\'');

            while ($array=mysqli_fetch_array($sql)) 
            {
              $id_paciente= $array[0];
              $no_citologia= $array[1];
              $nombre= $array[2];
              $edad= $array[3];
              $domicilio= $array[4];
              $telefono=$array[5];
              $residencia=$array[6];
              $edo_civil=$array[7];
              $ocupacion=$array[8];
              $escolaridad=$array[9];
              $contacto=$array[10];
            }
	

?>
<h2>PACIENTE <?php echo "$nombre"; ?></h2>

<!-- FORMULARIO DE MODIFICACIÓN DE LOS DATOS
        
        LOS NOMBRES DE LAS VARIABLES DE CADA LABEL SE MANDAN A LLAMAR A OTRO PHP QUE HACE TODO EL PROCESO DE MODIFICACIÓN
         -->
  <div class="register-photo" style="background-color:rgb(224,225,225);">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(img/iniciar.jpg);"></div> 

    <form method="post" action="modificacionpacc.php">
         
         <div class="form-group">
              Id del paciente
            <input class="form-control"  type="text" name="id" value="<?php echo $id_paciente ?>" disabled> 
            <input class="form-control" type="hidden" name="id" value="<?php echo $id_paciente ?>">
          </div>
      
          <div class="form-group">
            Número de citología
            <input class="form-control" type="text" name="citologia" value="<?php echo $no_citologia ?>" disabled>  
            <input class="form-control" type="hidden" name="citologia" value="<?php echo $no_citologia ?>">
         </div>

         <div class="form-group">
          Nombre
            <input class="form-control" type="text" name="nombre" value="<?php echo $nombre ?>" >
        </div>

        <div class="form-group">
          Edad
          <input class="form-control" type="text" name="edad" value="<?php echo $edad ?>" >
        </div>

         <div class="form-group">
          Domicilio
           <input class="form-control" type="text" name="domicilio" value="<?php echo $domicilio ?>" >
        </div>

        <div class="form-group">
          Teléfono
          <input class="form-control" type="text" name="telefono" value="<?php echo $telefono ?>" >
        </div>

       
      
        <div class="form-group">
          Residencia
          <input class="form-control" type="text" name="residencia" value="<?php echo $residencia ?>" > 
        </div>

        <div class="form-group">
          Estado civil
              <select class="form-control" id="select" name="edo_civil" class="custom-select" value="<?php echo $edo_civil ?>">
                 <option class="form-control" name="edo_civil" value="Casado" <?php if($edo_civil=="Casado") echo "selected"; ?> >Casado</option>
                 <option class="form-control" name="edo_civil" value="Soltero" <?php if($edo_civil=="Soltero") echo "selected"; ?> >Soltero</option>
                 <option class="form-control" name="edo_civil"  value="Viudo" <?php if($edo_civil=="Viudo") echo "selected"; ?> >Viudo</option>
                 <option class="form-control" name="edo_civil" value="Union Libre" <?php if($edo_civil=="Union Libre") echo "selected"; ?> >Unión Libre</option>
               </select>
        </div>
        <div class="form-group">
          Ocupación
          <input class="form-control" type="text" name="ocupacion" value="<?php echo $ocupacion ?>" >
        </div>

        <div class="form-group">
          Escolaridad
           <select class="form-control" id="select" name="escolaridad" class="custom-select" value="<?php echo $escolaridad ?>">
                    <option class="form-control" name="escolaridad" value="Ninguna" <?php if($escolaridad=="Ninguna") echo "selected"; ?> >Ninguna</option>
                    <option class="form-control" name="escolaridad" value="Primaria" <?php if($escolaridad=="Primaria") echo "selected"; ?> >Primaria</option>
                    <option class="form-control" name="escolaridad" value="Secundaria" <?php if($escolaridad=="Secundaria") echo "selected"; ?> >Secundaria</option>
                    <option class="form-control" name="escolaridad" value="Preparatoria" <?php if($escolaridad=="Preparatoria") echo "selected"; ?> >Preparatoria</option>
                    <option class="form-control" name="escolaridad" value="Licenciatura" <?php if($escolaridad=="Licenciatura") echo "selected"; ?> >Licenciatura</option>
                    <option class="form-control" name="escolaridad" value="Postgrado" <?php if($escolaridad=="Postgrado") echo "selected"; ?> >Postgrado</option>
                    </select>
        </div>

        <div class="form-group">
          Contacto
         <input class="form-control" type="text" name="contacto" value="<?php echo $contacto ?>" >
        </div>

        <div class="form-group">
          <button class="btn btn-primary btn-block" type="submit" style="color: black; background-color:rgb(60, 141, 188);">Actualizar datos</button>
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
    <strong>Expediente LENS</strong> 2019
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
</html>
<?php
  }
  
  if ($_SESSION['sesion']==null)
  {
      echo "<script>location.href='login.php'</script>";
  }

?>