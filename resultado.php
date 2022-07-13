<?php
error_reporting(0);
session_start();
  if ($_SESSION['sesion']!=null) 

  {
    ?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Examen </title>
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
           


<form method="post" action="alta_resultado.php">
          <section class="content container-fluid">

              <div class="-photo" style="background-color:rgb(224,225,225);">
              <div class="form-container">
                 

                   <div class="form-group">
                  Paciente
     <!--               <select class="form-control" type="text" name="id_paciente" placeholder="Paciente" required>
                
              <?php
             //               require("conexion.php");
             //               $consulta='SELECT id_paciente,nombre from paciente';
             //               $query=mysqli_query($conexion,$consulta);  
             //               while ($registros=mysqli_fetch_array($query)) 
             //               {
             ///               echo "<option value =".$registros['id_paciente'].">".$registros['nombre']."</option>";
             //               }
                ?>                       

                    </select>
-->
                      <center><input type="text" class="form-control" id="search" placeholder="Nombre del paciente"></center>
 <div class="col-md-3 col-md-offset-3" id="result">
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<script type="text/javascript" src="js/index.js"></script>
                </div>
              </div>
            </div>
          
</section>

          <!----------------------descargar.jpg------------FORMULARIO---   >

              <!--RESULTADOS EXAMEN-------------------------------------->
              







<!--FORMULARIO PRUEBA-->

  


<div class="form-horizontal">
<div class="col-sm-6">
    <div class="form-group">

              <h1>EXPLORACIÓN FÍSICA DE MAMA </h1>
    </section>


                         <b>PRESENCIA DE MASA CUTÁNEA</b>
                <div class="">
                          <input type="radio" name="prese_masa" value="Si" >&nbsp;&nbsp;SI <br>
                          <input type="radio" name="prese_masa" value="No">&nbsp;&nbsp;NO <br>
                          <input type="radio" name="prese_masa" value="Movil">&nbsp;&nbsp;MÓVIL <br>
                          <input type="radio" name="prese_masa" value="Fija">&nbsp;&nbsp;FIJA <br>
                </div>
                         <b>UMBILICACIÓN Y CAMBIOS DE DIRECCIÓN DEL PEZÓN</b> <br>

                         <input type="radio" name="umbilicacion" value="Si"> SI &nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="radio" name="umbilicacion" value="No"> NO<br><br>
                    
                <div class="">
                         <b> RETRACCIÓN DE LA PIEL</b><br>
                         <input type="radio" name="retraccion_piel" value="Si"> SI &nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="radio" name="retraccion_piel" value="No"> NO<br><br>
                 </div>
                         <b>PIEL DE NARANJA</b><br>

                         <input type="radio" name="piel_naranja" value="Si"> SI &nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="radio" name="piel_naranja" value="No"> NO<br><br>
                    
                 
                 <div class="">
                         <b>HIPEREMIA O HIPERTEMIA LOCAL</b><br>
                         <input type="radio" name="hipertemia" value="Si"> SI &nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="radio" name="hipertemia" value="No"> NO<br><br>
                    
                </div>
                <div class="">
                        <b>ULCERACIÓN CUTÁNEA</b><br>
                        <input type="radio" name="ulceracion" value="Si"> SI &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="ulceracion" value="No"> NO<br><br>
                 </div>
            
                 <br>
                  <b>MAMA</b><br>
                    <img src="imagenes/mama.jpeg" width="300" />
                    <br><br>
                    <input type="checkbox" name="csed" value="Cuarto Sup Ext Der. ">&nbsp;&nbsp;C S E Der&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="csid" value="Cuarto Sup Int Izq. ">&nbsp;&nbsp;C S I Izq &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="csii" value="Cuarto Sup Int Der. ">&nbsp;&nbsp;C S I Der &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="csei" value="Cuarto Sup Ext Izq. ">&nbsp;&nbsp;C S E Izq &nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="cied" value="Cuarto Inf Ext Der. ">&nbsp;&nbsp;C I E Der &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ciid" value="Cuarto Inf Int Der. ">&nbsp;&nbsp;C I I Der &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ciii" value="Cuarto Inf Int Izq. ">&nbsp;&nbsp;C I I Izq &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ciei" value="Cuarto Inf Ext Izq. ">&nbsp;&nbsp;C I E Izq &nbsp;&nbsp;&nbsp;&nbsp;<br>

  
           <h1>RESULTADO DE CITOLOGIA </h1>

           <br>
           
           <b> MUESTRA</b><br>

                 <div class="">
                    <input type="radio" name="muestra" value="Adecuada">&nbsp;&nbsp;Adecuada&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="muestra" value="Limitada">&nbsp;&nbsp;Limitada&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="muestra" value="No adecuada">&nbsp;&nbsp;No adecuada&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <br>
             </div>


              <b> VALOR ESTROGÉNICO</b><br><br>
                 <div class="">

                  <input type="radio" name="v_est" value="Escala 0 a 100">&nbsp;&nbsp;Escala 0 a 100 &nbsp;&nbsp;&nbsp;&nbsp;<br>
                  <input type="radio" name="v_est" value="91-100 Hiperestrogenismo">&nbsp;&nbsp;91-100 Hiperestrogenismo &nbsp;&nbsp;&nbsp;&nbsp;<br>
                  <input type="radio" name="v_est" value="55-90 Ciclo Menstrual">&nbsp;&nbsp;55-90 Ciclo Menstrual &nbsp;&nbsp;&nbsp;&nbsp;<br>
                  <input type="radio" name="v_est" value="50-60 Embarazo normal">&nbsp;&nbsp;50-60 Embarazo normal &nbsp;&nbsp;&nbsp;&nbsp;<br>
                  <input type="radio" name="v_est" value="1-50 Hipoestrogenismo ">&nbsp;&nbsp;1-50 Hipoestrogenismo  &nbsp;&nbsp;&nbsp;&nbsp;<br>
                  <input type="radio" name="v_est" value="0 Ausencia de acción estrogénica">&nbsp;&nbsp;0 Ausencia de acción estrogénica&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                           
                </div>
               <b> RESULTADO</b><br><br>
             <div class="">
                    <input type="radio" name="resultado" value="Negativo a cancer">&nbsp;&nbsp;Negativo a cáncer&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultado" value="Negativo a cancer con proceso inflamatorio">&nbsp;&nbsp;Negativo a  cáncer con proceso inflamatorio&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultado" value="Proceso Inflamatorio">&nbsp;&nbsp;Proceso inflamatorio&nbsp;&nbsp;&nbsp;&nbsp;<br>

                    <input type="radio" name="resultado" value="ASC_US">&nbsp;&nbsp;ASC_US&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultado" value="ASC_H">&nbsp;&nbsp;ASC_H&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultado" value="AGC">&nbsp;&nbsp;AGC&nbsp;&nbsp;&nbsp;&nbsp;<br>

                    <input type="radio" name="resultado" value="LIEBG">&nbsp;&nbsp;LIEBG&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultado" value="LIEAG">&nbsp;&nbsp;LIEAG&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultado" value="Carcinoma epidermoide">&nbsp;&nbsp;Carcinoma epidermoide &nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultado" value="Adenocarcinoma">&nbsp;&nbsp;Adenocarcinoma&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                  <h1>RESULTADO COLPOSCÓSPICO</h1>
                  <br><br>

                   <b>COLPOSCOPÍA</b><br>

                       <input type="radio" name="colposcopia" value="Satisfactoria">&nbsp;Satisfactoria &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <input type="radio" name="colposcopia" value="No satisfactoria">&nbsp;No satisfactoria  &nbsp;&nbsp;&nbsp;&nbsp;<br><br>

                       <b>ZONA DE TRANSFORMACIÓN</b><br><br>

                       <input type="radio" name="zona_t" value="UEC compl visible">&nbsp;1.- UEC completamente visible&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;<br>
                       <input type="radio" name="zona_t" value="UEC parc visible">&nbsp;2.- UEC parcialmente visible
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                       <input type="radio" name="zona_t" value="UEC no visible">&nbsp;3.- UEC no visible
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

                         <input type="radio" name="resultados_c" value="Hallazgos normales">&nbsp;&nbsp;Hallazgos normales&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultados_c" value="Hallazgos anormales">&nbsp;&nbsp;Anormales &nbsp;&nbsp;&nbsp;&nbsp;<br>

                    <input type="radio" name="resultados_c" value="Lesión intraepitelial escamosa de bajo grado">&nbsp;&nbsp;Lesión intraepitelial escamosa de bajo grado&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultados_c" value="Lesión intraepitelial escamosa de alto grado">&nbsp;&nbsp;Lesión intraepitelial escamosa de alto grado&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultados_c" value="No especifico">&nbsp;&nbsp; No especifico&nbsp;&nbsp;&nbsp;&nbsp;<br> 
                    <input type="radio" name="resultados_c" value="Lesión sugestiva de invasión">&nbsp;&nbsp;Lesión sugestiva de invasión&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="resultados_c" value="Cancer invasor">&nbsp;&nbsp;Cancer invasor&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                    <b>BIOPSIA<br></b>
                    <input type="radio" name="biopsia" value="si">&nbsp;Si &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <input type="radio" name="biopsia" value="no">&nbsp;No &nbsp;&nbsp;&nbsp;&nbsp;<br>

                       <br>
                    Lugar <br>

                  <TEXTAREA name="lugar" ROWS="1" COLS="50">
                   
                    </TEXTAREA><br>
                    <br>

                  Evaluación del canal cervical<br>
                     <textarea name="ecv" rows="1" cols="50">
                   
                    </textarea><br>

                     <b>SITIO DE LA LESIÓN</b><br>
                    <img src="imagenes/rad.jpeg" width="300" />
                    <br><br>
                    <input type="checkbox" name="l_ant" value="Labio ant.">&nbsp;&nbsp;Labio anterior&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="l_post" value="Labio post. ">&nbsp;&nbsp;Labio posterior&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="" value="">&nbsp;&nbsp;Otras&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="otr_lab">

                    <br> <br><br> 

                    <h1>RESULTADO BIOPSIA CERVICO-VAGINAL</h1>
                    <br>
                    <input type="radio" name="sistema_b" value="Normal">&nbsp;&nbsp;Normal&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="sistema_b" value="Inflamatorio">&nbsp;&nbsp;Inflamatorio&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="sistema_b" value="Cambios por VPH">&nbsp;&nbsp;Cambios por VPH&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="sistema_b" value="LIEBG (NIC-1)">&nbsp;&nbsp;LIEBG (NIC-1)&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="sistema_b" value="LIEAG (NIC-2, NIC-3)">&nbsp;&nbsp;LIEAG (NIC-2, NIC-3)&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="sistema_b" value="Cancer epidermoide">&nbsp;&nbsp;Cancer epidermoide&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="sistema_b" value="Adenocarcinoma">&nbsp;&nbsp;Adenocarcinoma&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                    


      
    </div>
    
    </div>
</div>


<!--A PARIR DE AQUI LA OTRA MITAD ESTA AL LADO-->
<div class="col-sm-6">
    <div class="form-group">
       
         <div class="">
          <br>
          <br>
          <br>
                       <strong>FECHA DE ÚLTIMA MAMOGRAFÍA</strong> 
            <div class="">
                    <input class="form-control" type="date" name="ult_mam" placeholder="Menarca">
           </div>

           <div class="">
                      <b>SECRECIÓN POR EL PEZÓN</b><br>
                     <input type="radio" name="secrecion" value="Si"> SI &nbsp;&nbsp;&nbsp;&nbsp;
                     <input type="radio" name="secrecion" value="No"> NO<br><br>
           </div>
           <div class="">
                      <b> AUMENTO DE LA RED VENOSA SUPERFICIAL</b><br>
                     <input type="radio" name="aumento_rvs" value="Si"> SI &nbsp;&nbsp;&nbsp;&nbsp;
                     <input type="radio" name="aumento_rvs" value="No"> NO<br><br>
           </div>
           <div class="">
                      <b>MASTALGIA</b><br>
                     <input type="radio" name="mastalgia" value="Si"> SI &nbsp;&nbsp;&nbsp;&nbsp;
                     <input type="radio" name="mastalgia" value="No"> NO<br><br>
                     <input type="radio" name="mastalgiau" value="Mama derecha"> Mama derecha &nbsp;&nbsp;&nbsp;&nbsp;
                     <input type="radio" name="mastalgiau" value="Mama izquierda"> Mama izquierda &nbsp;&nbsp;&nbsp;&nbsp;
                     <input type="radio" name="mastalgiau" value="Ambas"> Ambas <br><br>
           </div>
           <b>RESULTADOS BIRADS</b>
           <div class="">
                    <input type="radio" name="r_birads" value="I">&nbsp;&nbsp;I&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="r_birads" value="II">&nbsp;&nbsp;II&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="r_birads" value="III">&nbsp;&nbsp;III&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="r_birads" value="IV">&nbsp;&nbsp;IV&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="r_birads" value="V">&nbsp;&nbsp;V&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="radio" name="r_birads" value="VI">&nbsp;&nbsp;VI&nbsp;&nbsp;&nbsp;&nbsp;<br>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br> <b>SALPINGOCLASIA</b>           <br><br>

              
                    <input type="radio" name="salpingoclasia" value="Ausencia de células endocervicales">&nbsp;Ausencia de células endocervicales<br>
                    <input type="radio" name="salpingoclasia" value="Ausencia de células de metaplasia">&nbsp;Ausencia de células de metaplasia<br>
                    <input type="radio" name="salpingoclasia" value="Frotis con artefactos que no permiten su lectura">&nbsp;Frotis con artefactos que no permiten su lectura;<br><br><br>

                <b>Otros</b>

                    <br>
                     <TEXTAREA name="otros_hallazgos" ROWS="1" COLS="50">
                   
                    </TEXTAREA>
                
             </div>
                <br><br>
                <b>PATRON MICROBIANO  Y VIRAL</b><br>
                    <input type="checkbox" name="n_e" value="N/E. ">&nbsp;&nbsp;No especifico&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="cocos" value="Cocos. ">&nbsp;&nbsp;Cocos &nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="bacilos" value="Bacilos. ">&nbsp;&nbsp;Bacilos&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="g_v" value="Gardnerella vaginalis. ">&nbsp;&nbsp;Gardnerella vaginalis&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="monilias" value="Monilias. ">&nbsp;&nbsp;Monilias&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="tricomonas" value="Tricomonas. ">&nbsp;&nbsp;Tricomonas&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="actinomices" value="Actinomices. ">&nbsp;&nbsp;Actinomices&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="e_vph" value="Efecto VPH. ">&nbsp;&nbsp;Efecto VPH&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="e_h" value="Efecto Herpesvirus. ">&nbsp;&nbsp;Efecto Herpesvirus&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <input type="checkbox" name="e_c" value="Efecto Chlamydia. ">&nbsp;&nbsp;Efecto Chlamydia&nbsp;&nbsp;&nbsp;&nbsp;<br>


                    <br><br><br><br><br><br><br><br><br><br>
                   
                    
                     <b>RADIO</b><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r1" value="R1 ">&nbsp;&nbsp;R1&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r7" value="R7 ">&nbsp;&nbsp;R7&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r2" value="R2 ">&nbsp;&nbsp;R2&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r8" value="R8 ">&nbsp;&nbsp;R8&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r3" value="R3 ">&nbsp;&nbsp;R3&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r9" value="R9 ">&nbsp;&nbsp;R9&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r4" value="R4 ">&nbsp;&nbsp;R4&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r10" value="R10 ">&nbsp;&nbsp;R10&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r5" value="R5 ">&nbsp;&nbsp;R5&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r11" value="R11 ">&nbsp;&nbsp;R11&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r6" value="R6 ">&nbsp;&nbsp;R6&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="r12" value="R12 ">&nbsp;&nbsp;R12&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

                     Observaciones de la lesión<br>
                    <textarea name="obs_les" rows="3" cols="50">
                   
                    </textarea><br>




                    <br>


                    <b>TEST DE SCHILLER</b> 
                    <br>
                  <input type="radio" name="test_schiller" value="+">&nbsp;&nbsp;Positivo (+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  <input type="radio" name="test_schiller" value="-">&nbsp;&nbsp;Negativo (-)&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                    

                    Otros hallazgos <br>
                    <textarea name="otros_hallazgoss" rows="1" cols="50">
                   
                    </textarea><br><br>


                    Observaciones<br>
                    <textarea name="observaciones" rows="5" cols="50">
                   
                    </textarea><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    Observaciones<br>
                    <textarea name="observaciones_b" rows="5" cols="50">
                   
                    </textarea>

                
            <div class="form-group">
       
    </div>
    
        </div>
    </div>
</div>   

<div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" style="color: black;   background-color:rgb(60, 141, 188);">Enviar</button>
                </div>



</form>
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

