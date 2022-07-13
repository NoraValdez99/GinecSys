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
  <title> Examen </title>
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



        <style type="text/css">
      h1
      {
        font-family: arial, sans-serif;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 2.6pt;
        word-spacing: 0.2pt;
        background-color: #3c8dbc;
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
              
              PACIENTE

            </h1>
          </section>
           

          <section class="content container-fluid">

<!-- INICIO DEL FORMULARIO--->
<form method="post" action="alta_formulario.php">

              <div class="-photo" style="background-color:rgb(224,225,225);">
              <div class="form-container">
                 

                   <div class="form-group">
                  Paciente
                <select class="form-control" type="text" name="id_paciente" placeholder="Paciente" required>
                    
              <?php
                            require("conexion.php");
                            $consulta='SELECT id_paciente,nombre from paciente';
                            $query=mysqli_query($conexion,$consulta);  
                            while ($registros=mysqli_fetch_array($query)) 
                            {
                            echo "<option value =".$registros['id_paciente'].">".$registros['nombre']."</option>";
                            }
                ?>                       

                    </select>
                </div>
              </div>
            </div>
          </section>

    
      <!--    FICHA DE IDENTIFICACION************************** -->
      <h1>
         
        ANTECEDENTES GINECO-OBSTÉTRICOS 

      </h1>
    </section>
      


    <section class="content container-fluid">

        <div class="register-photo" style="background-color:rgb(224,225,225);">
        
          <div class="form-container">
             <div class="image-holder" style="background-image:url(img/iniciar.jpg);"></div>

            
                
                Citología previa 
                <div class="form-group">
                   
                   <select class="form-control" type="text" name="citologia_previa" placeholder="Citología Previa" required>
                    
                        <option value="Si">SI</option>
                        <option value="No">NO</option>
                        

                    </select>

                </div>
                Fecha ultima citología 
                 <div class="form-group">
                    <input class="form-control" type="date" name="fech_ultimacitologia" placeholder="Fecha ultima citología">
                </div>
                  MENARCA (años)
                <div class="form-group">
                    <input class="form-control" type="number" name="menarca" placeholder="Menarca">
                </div>  
               
                <div class="form-group">
                  RITMO
                <select class="form-control" type="text" name="ritmo" placeholder="RITMO" required>
                    
                        <option value="Regular">Regular</option>
                        <option value="Irregular">Irregular</option>
                        

                    </select>
                </div>
                 <div class="form-group">
                 FUR
                      <input class="form-control" type="date" name="fur" placeholder="FUR">
                </div>
                IVSA 
                <div class="form-group">
                    <input class="form-control" type="number" name="ivsa" placeholder="IVSA">
                </div>
                PAREJAS SEXUALES
                <div class="form-group">
                    <input class="form-control" type="number" name="parejas_sexuales" placeholder="Parejas sexuales ">
                </div>
                GESTA
                <div class="form-group">
                    <input class="form-control" type="number" name="g" placeholder="Gesta">
                </div>
                PARTO
                <div class="form-group">
                    <input class="form-control" type="number" name="p" placeholder="Parto">
                </div>
                CESÁREA
                <div class="form-group">
                    <input class="form-control" type="number" name="c" placeholder="Cesárea">
                </div>
                ABORTOS
                <div class="form-group">
                    <input class="form-control" type="number" name="a" placeholder="Abortos">
                </div>
                EDAD PRIMERA GESTA
                <div class="form-group">
                    <input class="form-control" type="number" name="primera_gesta" placeholder="Edad primera gesta">
                </div>
                AMENORREA
                <div class="form-group">
                    <select class="form-control" type="text" name="amenorrea" placeholder="AMENORREA" required>
                    
                        <option value="Si">SI</option>
                        <option value="No">NO</option>
                        

                    </select>
                </div>
                MESES DE AMENORREA
                <div class="form-group">
                    <input class="form-control" type="number" name="meses_amenorrea" placeholder="Meses de amenorrea">
                </div>
           
                 Menopausia:   Fisiológica
                <div class="form-group">
                    <select class="form-control" type="text" name="meno_fisi" placeholder="Fisiológica" required>
                    
                        <option value="Si">SI</option>
                        <option value="No">NO</option>
                        

                    </select>
                </div>
                 Menopausia:   Quirúrgica 
                <div class="form-group">
                    <select class="form-control" type="text" name="meno_quiru" placeholder="Quirúrgica" required>
                    
                        <option value="Si">SI</option>
                        <option value="No">NO</option>
                        

                    </select>
                </div>
              
              

   
               
        <!-- /.content -->
                      <h1>

<!-- INGRESO DE DATOS DE UNA SECCIÓN DEL FORMULARIO -->
              TRATAMIENTOS PREVIOS 

            </h1>
          </section>
           

          <section class="content container-fluid">

              <div class="register-photo" style="background-color:rgb(224,225,225);">
              <div class="form-container">
                  <div class="image-holder" style="background-image:url(img/iniciar.jpg);"></div>

                  
                   
                   
                     <input type="checkbox" name="ivph" value="IVPH. " >&nbsp;&nbsp;IVPH <br>
                     <input type="checkbox" name="condilomas" value="Condilomas. " >&nbsp;&nbsp;CONDILOMAS <br>
                <input type="checkbox" name="liebg" value="LIEBG. " >&nbsp;&nbsp;LIEBG <br>
                <input type="checkbox" name="lieag" value="LIEAG. " >&nbsp;&nbsp;LIEAG <br>
                <input type="checkbox" name="carcinoma_epidermoide" value="Carcinoma Epidermoide. " >&nbsp;&nbsp;CARCINOMA EPIDERMOIDE <br>
                <input type="checkbox" name="adenocarcinoma" value="Adenocarcinoma. " >&nbsp;&nbsp;ADENOCARCINOMA <br>

                     <input type="checkbox" name="legrado" value="Legrado. ">&nbsp; LEGRADO  <br>
                     <input type="checkbox" name="electrocoagulacion" value="Electrocoag/Crioter. ">&nbsp;ELECTROCOAGULACIÓN Y/O CRIOTERAPIA<br><br>


                      QUIRURGICO <br>

                          <input type="radio" name="quirurgico" value="Conización">&nbsp; CONIZACIÓN<br>
                          <input type="radio" name="quirurgico" value="Histerectomía">&nbsp; HISTERECTOMÍA<br><br>



                     <input type="checkbox" name="radiacion" value="Radiación. ">&nbsp;RADIACIÓN<br>
                     <input type="checkbox" name="hormonal" value="Hormonal. ">&nbsp;HORMONAL<br>
                     <input type="checkbox" name="quimioterapia" value="Quimioterapia.">&nbsp;QUIMIOTERAPIA<br>



 <!-- ANTECEDENTES PERSONALES PATOLÓGICOS -->
                      <h1>
              
              ANTECEDENTES PERSONALES PATOLÓGICOS

            </h1>
          </section>
            

          <section class="content container-fluid">

              <div class="register-photo" style="background-color:rgb(224,225,225);">
              <div class="form-container">
                  <div class="image-holder" style="background-image:url(img/iniciar.jpg);"></div>

                  
                   Tabaquismo <br>

                          <input type="radio" name="tabaquismo" value="Si">&nbsp; Si<br>
                          <input type="radio" name="tabaquismo" value="No">&nbsp; No<br><br>
                     
                      No. Cigarrillos al día   
                      <div class="form-group">
                          <input class="form-control" type="number" name="no_cigarrillos" placeholder="No. Cigarrillos al día">
                      </div>

                      Años fumando  
                      <div class="form-group">
                          <input class="form-control" type="number" name="anios_fumando" placeholder="Años fumando" >
                      </div>
<hr>
                     Alcoholismo <br>
                   

                      <input type="radio" name="alcoholismo" value="Si">&nbsp; Si<br>
                      <input type="radio" name="alcoholismo" value="No">&nbsp; No<br><br>


                      Tipo de bebidas que consumes
                      <div class="form-group">
                          <input class="form-control" type="text" name="tipo_bebida" placeholder="Bebidas consumidas">
                      </div>
                      Frecuencia de consumo
                      <div class="form-group">
                          <input class="form-control" type="text" name="frec_alc" placeholder="Frecuencia">
                      </div>
                      No. de Años tomando
                      <div class="form-group">
                          <input class="form-control" type="number" name="anios_tomando" placeholder="Años tomando">
                      </div>
<hr>
                      Toxicomanias <br>

                      <input type="radio" name="toxicomanias" value="Si">&nbsp; Si<br>
                      <input type="radio" name="toxicomanias" value="No">&nbsp; No<br><br>

              
                      ¿Qué tipo de droga consume?
                      <div class="form-group">
                          <input class="form-control" type="text" name="cuales_toxicomanias" placeholder="Ttipo de droga">
                      </div>
                      No. de Años consumiendo
                      <div class="form-group">
                          <input class="form-control" type="number" name="anios_consumiendo" placeholder="Años consumiendo">
                      </div>

<!--SIGNOS Y SÍNTOMAS  -->
                      <h1>
              
              SIGNOS Y SÍNTOMAS 

            </h1>
          </section>
            

          <section class="content container-fluid">

              <div class="register-photo" style="background-color:rgb(224,225,225);">
              <div class="form-container">
                  <div class="image-holder" style="background-image:url(img/iniciar.jpg);"></div>

                  

                    
                      <div class="form-group">
                        <input type="checkbox" name="secrecion_vaginal" value="si">&nbsp; SECRECIÓN VAGINAL<br>
                              
                        <input type="checkbox" name="sangrado_vaginal" value="si">&nbsp; SANGRADO VAGINAL<br>
                      
                        <input type="checkbox" name="prurito" value="si">&nbsp; PRURITO <br>
                     
                        <input type="checkbox" name="escozor" value="si">&nbsp; ESCOZOR <br>
                          
                        <input type="checkbox" name="sangrado_coito" value="si">&nbsp; SANGRADO AL COITO  <br>

                        <input type="checkbox" name="dispareunia" value="si">&nbsp; DISPAREUNIA  <br>

                         <input type="checkbox" name="dolor_pelvico" value="si">&nbsp; DOLOR PÉLVICO  <br>

                         OTROS
                      <div class="form-group">
                          <input class="form-control" type="text" name="otros_sinto" placeholder="Otros" >
                      </div>

                          OBSERVACIONES
                      <div class="form-group">
                          <input class="form-control" type="text" name="observaciones" placeholder="Observaciones" >
                      </div>
              

            <!-- MÉTODO DE PLANIFICACIÓN FAMILIAR   -->
                      <h1>
              
              MÉTODO DE PLANIFICACIÓN FAMILIAR 
            </h1>
          </section>
            

          <section class="content container-fluid">

              <div class="register-photo" style="background-color:rgb(224,225,225);">
              <div class="form-container">
                  <div class="image-holder" style="background-image:url(img/iniciar.jpg);"></div>

                  

                      <div class="form-group">

<!------------------------------------------------->

                          <input type="checkbox" name="oral" value="si">&nbsp; Oral<br>
                          <input type="checkbox" name="parche" value="si">&nbsp; Parche<br>
                          <input type="checkbox" name="inyectable" value="si">&nbsp; Inyectable<br>
                          <input type="checkbox" name="implante" value="si">&nbsp; Implante<br>
                          

                          <input type="checkbox" name="tcu380a" value="si">&nbsp;  DIU - TCU380A<br>
                          <input type="checkbox" name="mirena" value="si">&nbsp; DIU - MIRENA<br>


                           <input type="checkbox" name="metodos_barrera" value="si">&nbsp; PRESERVATIVO


                </div>

                      </div>


                      <div class="form-group">
                      
                          <input type="checkbox" name="espermicida" value="si" >&nbsp;&nbsp;ESPERMICIDA <br>

                          <input type="checkbox" name="anillo_vag" value="si" >&nbsp;&nbsp;ANILLO VAGINAL <br><br>


                        CONDÓN
                         <div class="form-group">
                   
                         <select class="form-control" type="text" name="condon" placeholder="COndon" required>
                    
                        <option value="masc">Masculino</option>
                        <option value="fem">Femenino</option>
                        <option value="No">Ningúno</option>

                    </select>

                </div>
                        
                          <input type="checkbox" name="bilings" value="si" >&nbsp;&nbsp;BILLINGS <br>
                        
                          <input type="checkbox" name="coito_interrumpido" value="si">&nbsp;&nbsp;COITO INTERRUMPIDO <br>
                        
                          <input type="checkbox" name="salpingoclasia" value="si">&nbsp;&nbsp;SALPINGOCLASIA <br>
                        

                          <input type="checkbox" name="vasectomia" value="si">&nbsp;&nbsp;VASECTOMÍA <br><br>

                          <input type="checkbox" name="ninguno" value="si">&nbsp;&nbsp;<b>NINGÚNO</b> <br>

                      </div>
                      Tiempo de uso ininterrumpido (años)
                      <div class="form-group">
                          <input class="form-control" type="number" name="tiempo_interrumpido" placeholder="Tiempo interrumpido en años" >
                      </div>
                      Otros
                        <input class="form-control" type="text" name="especifique" placeholder="Otros" ><br>
                      Observaciones
                      <div class="form-group">
                          <input class="form-control" type="text" name="observaciones_plan" placeholder="observaciones" >
                      </div>

 <!----------------------------------------------->                       
                          
                    
                        <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" style="color: black;   background-color:rgb(60, 141, 188);">Enviar</button>
                </div>
                       


             
            </form>
          <!-- </div>
           <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" style="color: black;   background-color:rgb(60, 141, 188);">Registrar</button>
                </div>
    </div>
     -->




<!--  
    <h1>
         Examen de Papanicolau
      </h1>
      <div class="register-photo" style="background-color:rgb(224,225,225);">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(img/iniciar.jpg);"></div>

            <form method="post" action="agregar_medico.php">
              
                <div class="form-group">
                    <input class="form-control" type="text" name="cedula" placeholder="Cédula " required>
                </div>  
                <div class="form-group">
                    <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                </div>
                 <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="contra" placeholder="Contraseña" required>
                </div>
               
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" style="color: black;   background-color:rgb(60, 141, 188);">Registrar</button>
                </div>
            </form>
        </div>
    </div>
    -->
    <section class="content container-fluid">

        

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
