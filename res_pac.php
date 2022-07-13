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
  <title> Resultados </title>
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
            }
  

      ?>

      <section class="content-header">
      <h1>
          PACIENTE: <?php echo $nombre; ?>
      </h1>
    </section>
      <!-- Main content -->
    <section class="content container-fluid">


<section class="content-header">
      <h1>
         RESULTADOS
      </h1>
    </section>
      
<?php


 $consulta='SELECT * FROM r_exp_mama WHERE fk_paciente=\''.$id.'\'';
            $query=mysqli_query($conexion,$consulta);  
  
    echo "
 <h1>Exploración física de mama</h1>
         <div class='tabla'>
            <table border=1 align=center>
            <thead>
                  <th>ID</th>
                  <th>Presencia masa cútanea</th>
                  <th>Umbilicación y cambios de dirección del pezón</th>
                  <th>Retracción piel</th>
                  <th>Piel naranja</th>
                  <th>Hipertemia</th>
                  <th>Ulceración cutánea</th>
                  <th>AsDA</th>
                  <th>Fech Ultima Mamografía</th>
                  </thead>
      ";
          
              while ($registros=mysqli_fetch_array($query)) {
                
                echo "<tr>";

                echo "<td>".$registros['id_r_exp']."</td>";
                echo "<td>".$registros['prese_masa']."</td>";
                echo "<td>".$registros['umbilicacion'].
                "</td>";
                echo "<td>".$registros['retraccion_piel']."</td>";
                echo "<td>".$registros['piel_naranja'].
                "</td>";
                echo "<td>".$registros['hipertemia']."</td>";
                echo "<td>".$registros['ulceracion']."</td>";
                echo "<td>".$registros['csed'].$registros['csid'].$registros['csii'].$registros['csei'].$registros['cied'].$registros['ciid'].$registros['ciii'].$registros['ciei']."</td>";
                echo "<td>".$registros['ult_mam'].
                "</td>";
               echo "</tr>";
                $registros=null;
            }
            echo "</table> </div> <hr>";

             $consulta='SELECT * FROM r_exp_mama WHERE fk_paciente=\''.$id.'\'';
            $query=mysqli_query($conexion,$consulta);  
  
    echo "
         <div class='tabla'>
            <table border=1 align=center>
            <thead>
                  <th>Secreción pezón</th>
                  <th>Aumento RVS</th>
                  <th>Mastalgia</th>
                  
                  <th>Birads</th>
                  <th>ID paciente</th>
                  </thead>
      ";
          
              while ($registros=mysqli_fetch_array($query)) {
                
                echo "<tr>";

                echo "<td>".$registros['secrecion']."</td>";
                echo "<td>".$registros['aumento_rvs']."</td>";
                echo "<td>".$registros['mastalgia']." ".$registros['mastalgiau']."</td>";
                echo "<td>".$registros['r_birads']."</td>";
                echo "<td>".$registros['fk_paciente'].
                "</td>";
               echo "</tr>";
                $registros=null;
            }
            echo "</table> </div> <hr>";
//--------------------------------------------------------------------

             $consulta='SELECT * FROM r_citologia WHERE fk_paciente=\''.$id.'\'';
            $query=mysqli_query($conexion,$consulta);  
  
    echo "
 <h1>Citología</h1>
         <div class='tabla'>
            <table border=1 align=center>
            <thead>
                  <th>ID</th>
                  <th>Muestra</th>
                  <th>Valor Estrogénico</th>
                  <th>Resultado</th>
                  <th>Salpingoclasia</th>
                  <th>Otros</th>
                  </thead>
      ";
          
              while ($registros=mysqli_fetch_array($query)) {
                
                echo "<tr>";

                echo "<td>".$registros['id_r_cit']."</td>";
                echo "<td>".$registros['muestra']."</td>";
                echo "<td>".$registros['v_est'].
                "</td>";
                echo "<td>".$registros['resultado']."</td>";
                echo "<td>".$registros['salpingoclasia'].
                "</td>";
                echo "<td>".$registros['otros_hallazgos']."</td>";
               echo "</tr>";
                $registros=null;
            }
            echo "</table> </div> <hr>";


            $consulta='SELECT * FROM r_citologia WHERE fk_paciente=\''.$id.'\'';
            $query=mysqli_query($conexion,$consulta);  
  
    echo "
         <div class='tabla'>
            <table border=1 align=center>
            <thead>
                  <th>Patron Microbiano y Viral</th>
                  
                  <th>ID paciente</th>
                  </thead>
      ";
          
              while ($registros=mysqli_fetch_array($query)) {
                
                echo "<tr>";

                echo "<td>".$registros['n_e'].$registros['cocos'].$registros['bacilos'].$registros['g_v'].$registros['monilias'].$registros['tricomonas'].$registros['actinomices'].$registros['e_vph'].$registros['e_h'].$registros['e_c']."</td>";
               
                echo "<td>".$registros['fk_paciente']."</td>";
               echo "</tr>";
                $registros=null;
            }
            echo "</table> </div> <hr>";
//--------------------------------------------------------------
             $consulta='SELECT * FROM r_colposcopia WHERE fk_paciente=\''.$id.'\'';
            $query=mysqli_query($conexion,$consulta);  
  
    echo "
 <h1>Colposcópico</h1>
         <div class='tabla'>
            <table border=1 align=center>
            <thead>
                  <th>ID</th>
                  <th>Colposcopía</th>
                  <th>Zona de transformación</th>
                  <th>Resultado</th>
                  <th>Biopsia</th>
                  <th>Lugar</th>
                  </thead>
      ";
          
              while ($registros=mysqli_fetch_array($query)) {
                
                echo "<tr>";

                echo "<td>".$registros['id_r_col']."</td>";
                echo "<td>".$registros['colposcopia']."</td>";
                echo "<td>".$registros['zona_t']."</td>";
                echo "<td>".$registros['resultados_c']."</td>";
                echo "<td>".$registros['biopsia']."</td>";
                echo "<td>".$registros['lugar']."</td>";
               echo "</tr>";
                $registros=null;
            }
            echo "</table> </div> <hr>";

              $consulta='SELECT * FROM r_colposcopia WHERE fk_paciente=\''.$id.'\'';
            $query=mysqli_query($conexion,$consulta);  
  
    echo "
         <div class='tabla'>
            <table border=1 align=center>
            <thead>
                  <th>Evaluación del Conducto Cervical</th>

                  <th>Labio</th>
                  <th>Radio</th>
                  <th>Observaciones de lesión</th>

                  <th>Test Schiller</th>
                  <th>Otros Hallazgos</th>
                  <th>Observaciones</th>
                  <th>ID paciente</th>
                  </thead>
      ";
          
              while ($registros=mysqli_fetch_array($query)) {
                
                echo "<tr>";

                echo "<td>".$registros['ecv']."</td>";
                
                echo "<td>".$registros['l_ant'].$registros['l_post'].$registros['otr_lab']."</td>";

                echo "<td>".$registros['r1'].$registros['r2'].$registros['r3'].$registros['r4'].$registros['r5'].$registros['r6'].$registros['r7'].$registros['r8'].$registros['r9'].$registros['r10'].$registros['r11'].$registros['r12']."</td>";

                echo "<td>".$registros['obs_les']."</td>";

                echo "<td>".$registros['test_schiller']."</td>";
                echo "<td>".$registros['otros_hallazgoss']."</td>";
                echo "<td>".$registros['observaciones']."</td>";
                echo "<td>".$registros['fk_paciente']."</td>";

                
               echo "</tr>";
                $registros=null;
            }
            echo "</table> </div> <hr>";
//--------------------------------------------------------------------
           $consulta='SELECT * FROM r_biopsia WHERE fk_paciente=\''.$id.'\'';
            $query=mysqli_query($conexion,$consulta);  
  
    echo "
 <h1>Biopsia</h1>
         <div class='tabla'>
            <table border=1 align=center>
            <thead>
                  <th>ID</th>
                  <th>Biopsia</th>
                  <th>Observaciones</th>
                  <th>ID paciente</th>
                  </thead>
      ";
          
              while ($registros=mysqli_fetch_array($query)) {
                
                echo "<tr>";

                echo "<td>".$registros['id_r_biopsia']."</td>";
                echo "<td>".$registros['sistema_b']."</td>";
                echo "<td>".$registros['observaciones_b']."</td>";
                echo "<td>".$registros['fk_paciente']."</td>";
               echo "</tr>";
                $registros=null;
            }
            echo "</table> </div> <hr>";


            
?>

        <center>
        <p>Imprimir</p>
        <?php
        echo "<a href='Reporte_resul/index.php?id=".$id."'><img src='imagenes/icono_PDF.png' width='50' height='50'></a>"; 
        ?>
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