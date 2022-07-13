 <!-- AQUÍ COMIENZA LO DE LA BARRA AZUL DE LA PARTE DE ARRIBA .................................................................................... -->
  <?php
    session_start();
  ?>

  <header class="main-header">

    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>AF</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Centro </b>Atención Familiar</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> 
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- Navbar Right Menu --><!-- AQUÍ ES EL BOTÓN DONDE SE PUEDE OCULTAR O DARLE VISTA AL MENÚ -->


      <div class="navbar-custom-menu">         
        <ul class="nav navbar-nav">

          <!-- EL CUADRO DÓNDE SE ENCURENTA EL USUARIO Y PUEDE CERRAR SESIÓN -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/logo1.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
 

              <span class="hidden-xs">Enfermero(a). <?php echo $_SESSION['nombre_enf']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/logo1.png" class="img-circle" alt="User Image">
                <p>
                  Enfermero(a). <?php echo $_SESSION['nombre_enf']; ?>
                </p>
              </li>

              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="cerrar_sesion.php"class="btn btn-default btn-flat">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>


    </nav>
  </header>

  <!-- ESTO ES EL FIN DE LA BARRA DEL MENÚ DE LA PARTE DE ARRIBA, LO DE AZUL ................................................................... -->
  







  <!-- .............................................. COMIENZA AQUÍ EL CÓDIGO DEL MENÚ LATERAL................................................... -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/logo1.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Empleado(a) <?php echo $_SESSION['nombre_enf']; ?></p>
          <!-- Status -->
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú</li>
        <!-- Optionally, you can add icons to the links -->
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Clientes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pacientes.php" >Clientes</a></li>
                        <li><a href="paciente_nuevo.php" >Agregar nuevo</a></li>

          </ul>
        </li>

    <!-- BARRA DE EXÁMENES>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Exámenes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="papanicolaou.php">Papanicolaou</a></li>
            <li><a href="resultado.php">Resultados</a></li>
          </ul>

          <  TERMINA LA BARRA DE EXÁMENES-- -->

        <li><a href="historial_consultas.php" ><i class="fa fa-link"></i> <span>Historial de acciones</span></a></li>

         <li><a href="mi_perfil.php" ><i class="fa fa-link"></i> <span>Mi perfil</span></a></li>
                  <!--li><a href="tutorial.php" ><i class="fa fa-link"></i> <span>Tutorial</span></a></li-->

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
