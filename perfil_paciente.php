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
  <title> Perfil Paciente </title>
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

        <link rel="stylesheet" href="dist/css/tablas.css">


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
    <!-- Main content -->
      <?php

      //en esta parte es dónde se mandan a llamar los datos de algún paciente,  dependiendo de su id, son los datos que se mostrarán que se ingresaron en la base de datos. Primero se llaman las columnas de la base de datos y se guardan en las variables que se crean en el php, después se mandan a llamar para que puedan ser mostrados en la página llamando la variable del php y guardándola en la variable del html y se muestra en la tabla

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

      <section class="content-header">
      <h1>
          PACIENTE: <?php echo $nombre; ?>
      </h1>
    </section>
      <!-- Main content -->
    <section class="content container-fluid">



       <?php
        
        $consulta='SELECT * FROM paciente WHERE id_paciente=\''.$id.'\'';
          $query=mysqli_query($conexion,$consulta);  
        
          ?>
          <div class="tabla">
          <table border=1 align=center>
          <thead>
          <th>Id</th>
            <th>No Citología</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Domicilio</th>
            <th>Teléfono</th>
            <th>Residencia</th>
            <th>Estado civil</th>
            <th>Ocupación</th>
            <th>Escolaridad</th>
            <th>Contacto</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
           </thead> 
          <?php
        
            while ($registros=mysqli_fetch_array($query)) {
              
              echo "<tr>";
              echo "<td>".$registros['id_paciente']."</td>";
              echo "<td>".$registros['no_citologia']."</td>";
              echo "<td>".$registros['nombre']."</td>";
              echo "<td>".$registros['edad']."</td>";
              echo "<td>".$registros['domicilio']."</td>";
              echo "<td>".$registros['telefono']."</td>";
              echo "<td>".$registros['residencia']."</td>";
              echo "<td>".$registros['edo_civil']."</td>";
              echo "<td>".$registros['ocupacion']."</td>";
              echo "<td>".$registros['escolaridad']."</td>";
              echo "<td>".$registros['contacto']."</td>";
            
               echo "<td>";
                
                  echo "<a href='modificarpaciente.php?id=".$registros['id_paciente']."'><center><img src='dist/img/modify.png' width='50' height='50'></center></a>";
                  //<img src='img/imprimir.png' width='50' height='50'>

               echo "</td>";
               
               echo "<td>";
           
         echo "       
               <script>
function confirmDel()
{
var agree=confirm('¿Realmente desea eliminarlo?');
if (agree) return true ;
else return false ;
}
</script>";


                  echo "<a onclick='return confirmDel();' href='eliminarpac.php?id=".$registros['id_paciente']."'><center><img src='dist/img/delete.png' width='50' height='50'></center></a>";

               echo "</td>";
             
             
              
              echo "</tr>";
          }
          echo "</table> </div> <hr>";

             echo "<a href='pap_pac.php?id=".$id."'><input type='button' name='PAPANICOLAOU' text='Pap'></a>";
             echo "<a href='res_pac.php?id=".$id."'><input type='button' name='Resultados' text='Pap'></a>";
   
?>


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
</html>
<?php
  }
  
  if ($_SESSION['sesion']==null)
  {
      echo "<script>location.href='login.php'</script>";
  }

?>