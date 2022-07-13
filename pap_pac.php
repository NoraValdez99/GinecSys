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
  <title> Papanicolaou </title>
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
          PAPANICOLAOU
      </h1>
    </section>

      <!-- Main content -->

<?php 

//Esta parte, es dónde se encuentran los datos en el formulario de antecedentes gineco_obstetricos que se hayan llenado con anterioridad, tiene la misma función que el código anterior de pacientes
        $consulta='SELECT id_ginneco,menarca,ritmo,fur,ivsa,parejas_sexuales,g,p,c,a,primera_gesta,amenorrea FROM antecedentes_ginecoobstetricos WHERE fk_paciente=\''.$id.'\'';
          $query=mysqli_query($conexion,$consulta);  

  echo "
  <h1>Antecedentes Ginecoobstetricos</h1>    
       <div class='tabla'>
          <table border=1 align=center>
          <thead>
          <th>ID</th>
            <th>Menarca</th>
            <th>Ritmo</th>
            <th>FUR</th>
              <th>IUSA</th>
                <th>Parejas Sexuales</th>
                <th>G</th>
                <th>P</th>
                <th>C</th>
                <th>A</th>
                <th>Primera Gesta</th>
                <th>Amenorrea</th>
                
            </thead>
    ";

            while ($registros=mysqli_fetch_array($query)) {
              
              echo "<tr>";
              echo "<td>".$registros['id_ginneco']."</td>";
              echo "<td>".$registros['menarca']."</td>";
              echo "<td>".$registros['ritmo']."</td>";
              echo "<td>".$registros['fur']."</td>";
              echo "<td>".$registros['ivsa']."</td>";
              echo "<td>".$registros['parejas_sexuales']."</td>";
              echo "<td>".$registros['g']."</td>";
              echo "<td>".$registros['p']."</td>";
              echo "<td>".$registros['c']."</td>";
              echo "<td>".$registros['a']."</td>";
              echo "<td>".$registros['primera_gesta']."</td>";
              echo "<td>".$registros['amenorrea']."</td>";

              
              echo "</tr>";
              $registros=null;
          }
          echo "</table> </div> <br>";
  



              $consulta='SELECT menopausia_fisiologica,menopausia_quirurgica,citologia_previa,ultima_cirugia,fk_paciente FROM antecedentes_ginecoobstetricos WHERE fk_paciente=\''.$id.'\'';
          $query=mysqli_query($conexion,$consulta);  

  echo "    
       <div class='tabla'>
          <table border=1 align=center>
          <thead>
          <th>Menopausia Fisiológica</th>
                <th>Menopausia Quirúrgica</th>
                <th>Citología Previa</th>
                <th>Ultima Cirugía</th>
                
                <th>ID Paciente</th>  
            </thead>
    ";

        
            while ($registros=mysqli_fetch_array($query)) {
              
              echo "<tr>";
              echo "<td>".$registros['menopausia_fisiologica']."</td>";
              echo "<td>".$registros['menopausia_quirurgica']."</td>";
              echo "<td>".$registros['citologia_previa']."</td>";
              echo "<td>".$registros['ultima_cirugia']."</td>";
             
              echo "<td>".$registros['fk_paciente']."</td>"; 
              echo "</tr>";
              $registros=null;
          }
          echo "</table> </div> <hr>";


//////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
//TABLA ANTECEDENTES PATOLOGICOS
$consulta='SELECT * FROM antecedentes_personales_patologicos WHERE fk_paciente=\''.$id.'\'';
          $query=mysqli_query($conexion,$consulta);  
//$registro=mysqli_fetch_array($query);

  echo "
  <h1>Antecedentes Personales Patológicos</h1>    
       <div class='tabla'>
          <table border=1 align=center>
          <thead>
          <th>ID</th>
                <th>Tabaquismo</th>
                <th>No de Cigarrillos</th>
                <th>Años Fumando</th>
                <th>Alcoholismo</th>
                <th>Tipo de Bebida</th>
                <th>Frecuencia</th>
                <th>Años Tomando</th>
                <th>Toxicomaias</th>
                <th>Cuales Drogas</th>
                <th>Años Consumiendo</th>
                <th>ID paciente</th>
            </thead>
    ";

            while ($registros=mysqli_fetch_array($query)) {
              
              echo "<tr>";
              echo "<td>".$registros['id_antecedentesp']."</td>";
              echo "<td>".$registros['tabaquismo']."</td>";
              echo "<td>".$registros['no_cigarrillos']."</td>";
              echo "<td>".$registros['anios_fumando']."</td>";
              echo "<td>".$registros['alcoholismo']."</td>";
              echo "<td>".$registros['tipo_bebida']."</td>";
              echo "<td>".$registros['frec_alc']."</td>";
              echo "<td>".$registros['anios_tomando']."</td>";
              echo "<td>".$registros['toxicomanias']."</td>";
              echo "<td>".$registros['cuales_toxicomanias']."</td>";
              echo "<td>".$registros['anios_consumiendo']."</td>";
              echo "<td>".$registros['fk_paciente']."</td>";  
              echo "</tr>";
              //$registros=null;
          }
          echo "</table> </div> <hr>";

  
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
// TABLA TRATAMIENTOS PREVIOS
$consulta='SELECT * FROM tratamientos_previos WHERE fk_paciente=\''.$id.'\'';
          $query=mysqli_query($conexion,$consulta);  

  echo "
  <h1>Tratamientos Previos</h1>    
       <div class='tabla'>
          <table border=1 align=center>
          <thead>
          <th>ID</th>
                <th>Tratamientos Previos</th>
                <th>Quirúrgico</th>
                <th>Otros</th>
                <th>ID paciente</th>
            </thead>
    ";
        
            while ($registros=mysqli_fetch_array($query)) {
              
              echo "<tr>";
              echo "<td>".$registros['id_tratamientos']."</td>";
              echo "<td>".$registros['ivph'].$registros['condilomas'].$registros['liebg'].$registros['lieag'].$registros['carcinoma_epidermoide'].$registros['adenocarcinoma'].$registros['legrado'].$registros['electrocoagulacion']."</td>";
              echo "<td>".$registros['quirurgico']."</td>";
              echo "<td>".$registros['radiacion'].$registros['hormonal'].$registros['quimioterapia']."</td>";
              echo "<td>".$registros['fk_paciente']."</td>";
             echo "</tr>";
              $registros=null; 
          }

          echo "</table> </div> <hr>";



////////////////////////////////////////////////////////////////////////////

$consulta='SELECT id_planfam, oral, parche, inyectable, implante, tcu380a, 
    mirena, metodo_barrera,espermicida, anillo_vag FROM planificacion_familiar WHERE fk_paciente=\''.$id.'\'';
          
$query=mysqli_query($conexion,$consulta);  

  echo "
  <h1>Planificación familiar</h1>    
       <div class='tabla'>
          <table border=1 align=center>
          <thead>
          <th>ID</th>
                <th>Oral</th>
                <th>Parche</th>
                <th>Inyectable</th>
                <th>Implante</th>
                <th>DIU TCU380A</th>
                <th>DIU Mirena</th>
                <th>Metodos de barrera</th>
                <th>Espermicidas</th>
                <th>Anillo vaginal</th>
                
            </thead>
    ";
        
            while ($registros=mysqli_fetch_array($query)) {
              
              echo "<tr>";
              echo "<td>".$registros['id_planfam']."</td>";
              echo "<td>".$registros['oral']."</td>";
              echo "<td>".$registros['parche']."</td>";
              echo "<td>".$registros['inyectable']."</td>";
              echo "<td>".$registros['implante']."</td>";
              echo "<td>".$registros['tcu380a']."</td>";
              echo "<td>".$registros['mirena']."</td>";
              echo "<td>".$registros['metodo_barrera'].
              "</td>";
              echo "<td>".$registros['espermicida']."</td>";
              echo "<td>".$registros['anillo_vag']."</td>";
               
             echo "</tr>";
              $registros=null;
          }
          echo "</table> </div> <hr>";


 $consulta='SELECT * FROM planificacion_familiar WHERE fk_paciente=\''.$id.'\'';
            $query=mysqli_query($conexion,$consulta);  
  
    echo "
 
         <div class='tabla'>
            <table border=1 align=center>
            <thead>

                  <th>Condon</th>
                  <th>Bilings</th>
                  <th>Coito Interrumpido</th>
                  <th>Salpingoclasia</th>
                  <th>Vasectomia</th>
                  <th>Ninguno</th>
                  <th>Tiempo ininterrumpido</th>
                  <th>Otros</th>
                  <th>Observaciones</th>
                  
                  
                  <th>ID paciente</th>
              </thead>
      ";
          
              while ($registros=mysqli_fetch_array($query)) {
                
                echo "<tr>";

                echo "<td>".$registros['condon']."</td>";
                echo "<td>".$registros['bilings']."</td>";
                echo "<td>".$registros['coito_interrumpido'].
                "</td>";
                echo "<td>".$registros['salpingoclasia']."</td>";
                 echo "<td>".$registros['vasectomia'].
                "</td>";
                echo "<td>".$registros['ninguno']."</td>";
                echo "<td>".$registros['tiempo_interrumpido']."</td>";
                echo "<td>".$registros['especifique'].
                "</td>";
                 echo "<td>".$registros['observaciones'].
                "</td>";
                 
                
                echo "<td>".$registros['fk_paciente']."</td>";
               echo "</tr>";
                $registros=null;
            }
            echo "</table> </div> <hr>";



////////////////////////////////////////////////////////////////////////////

// TABLA SIGNOS SÍNTOMAS
$consulta='SELECT * FROM signos_sintomas WHERE fk_paciente=\''.$id.'\'';
          $query=mysqli_query($conexion,$consulta);  

  echo "
  <h1>Signos y sintomas</h1>    
       <div class='tabla'>
          <table border=1 align=center>
          <thead>
          <th>ID</th>
                <th>Secreción vaginal</th>
                <th>Sangrado vaginal</th>
                <th>Putrito</th>
                <th>Escozor</th>
                <th>Sangrado al Coito</th>
                <th>Dispareunia</th>
                <th>Dolor pelvico</th>
                <th>Otros</th>
                <th>Observaciones</th>
                <th>ID paciente</th>
            </thead>
    ";
        
            while ($registros=mysqli_fetch_array($query)) {
              
              echo "<tr>";
              echo "<td>".$registros['id_signo']."</td>";
              echo "<td>".$registros['secrecion_vaginal']."</td>";
              echo "<td>".$registros['sangrado_vaginal']."</td>";
              echo "<td>".$registros['prurito']."</td>";
              echo "<td>".$registros['escozor']."</td>";
              echo "<td>".$registros['sangrado_coito']."</td>";
              echo "<td>".$registros['dispareunia']."</td>";
              echo "<td>".$registros['dolor_pelvico']."</td>";
              echo "<td>".$registros['otros']."</td>";
              echo "<td>".$registros['observaciones']."</td>";
              echo "<td>".$registros['fk_paciente']."</td>";
             echo "</tr>";
              $registros=null;
          }
          echo "</table> </div> <hr>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7
?>



        <center>
        <p>Imprimir</p>
        <?php
        echo "<a href='Reporte_ants/index.php?id=".$id."'><img src='imagenes/icono_PDF.png' width='50' height='50'></a>";
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