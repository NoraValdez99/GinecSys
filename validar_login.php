<?php  	

require("conexion.php"); //Se manda a llamar el archivo de conexión con la BD
error_reporting(0);
	//Aquí se crean las variables vinculadas con los "name" del archivo de login.php
	$email=$_POST["email"];
	$contra=md5($_POST["contra"]);
	$sesion=true;

	//se hace la consulta, solamente pedimos con el where el email y el login porque es lo que se nos pide para iniciar sesión
	  $consulta="SELECT * from medico where pass='$contra' and correo='$email'";
	 
	 //se conecta la consulta con la BD
	 $query=mysqli_query($conexion,$consulta);

	 if ($query) 
	 {
	 	session_start();
	 	$_SESSION['sesion']=null;
	
	 //este while recoge los datos que se ingresan en el formulario
	 while ($datos=mysqli_fetch_array($query)) {
	 	$id=$datos['cedula'];
	 	$nombre=$datos['nombre'];
	 	$us=$datos['correo'];
	 	$pass=$datos['pass'];
	 	$priv=$datos['privilegio'];
	 	$estatus=$datos['estatus'];
	 	$admin=$datos['admin'];
	 	
	 }

	 //Con este if se verifica si los datos que se ingresaron en el formulario coinciden, si los datos están registrados en la base de datos, entonces el sistem iniciará sesión, en caso de que no, se enviará una ventana emergente y lo redireccionará al login.php

	 if ($pass==$contra && $us==$email && $priv=="doctor" && $estatus=="activo") 
	 {
	/*
		echo ' <script language="javascript">alert("BIENVENIDO DOCTOR");</script> ';
	*/
			
			
			$_SESSION['id']=$id;
			$_SESSION['nombre']=$nombre;
			$_SESSION['privilegio']=$priv;
			$_SESSION['sesion']=$sesion;
			$_SESSION['admin']=$admin;

			echo "<script>location.href='home.php'</script>";
 
		}
	 else if ($pass==$contra && $us==$email && $priv=="enfermero" && $estatus=="activo") {
	/*
			echo ' <script language="javascript">alert("BIENVENIDO ENFERMERO");</script> ';
	*/
			
			$_SESSION['id']=$id;
			$_SESSION['nombre_enf']=$nombre;
			$_SESSION['privilegio']=$priv;
			$_SESSION['sesion']=$sesion;
			$_SESSION['admin']=$admin;		
			echo "<script>location.href='home.php'</script>";
		}
	else if ($pass==$contra && $us==$email && $priv=="doctor" && $estatus=="inactivo") {
		echo ' <script language="javascript">alert("DOCTOR INACTIVO");</script> ';
	}
	else if ($pass==$contra && $us==$email && $priv=="enfermero" && $estatus=="inactivo") {
		echo ' <script language="javascript">alert("enfermero INACTIVO");</script> ';
	}
	

	}
	

	{
		echo ' <script language="javascript">alert("Algo no está bien... Por favor verifique.");</script> ';
			echo "<script>location.href='login.php'</script>";
	}
/*
	    if($cmd=mysqli_fetch_array($query))
    {
        $privilegio=$cmd['privilegio'];

        //echo "$privilegio";     
        if ($contra==$cmd['contra']) 
        {
          session_start();
          $_SESSION['email']=$email;
          $_SESSION['contra']=$contra;

          	if ($privilegio=="enfermero")
            {
            	 echo "<a href='home2.php'>1</a>";

          	}
          	else
          	{
				 echo "<a href='home.php'>2</a>";          		
          	}
        }
       }
*/
?>