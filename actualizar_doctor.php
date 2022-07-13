<?php  

	
	require("conexion.php");
	//Se recogen las variables del archivo HTML de modificar y se guardan en estas nuevas variables para poder hacer la consulta
	$cedula=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];	
	$contra=$_POST['contra'];
	$privilegio=$_POST['privilegio'];
	$estatus=$_POST['estatus'];
//	$nuevocontra=$_POST['nuevocontra'];


	if (empty($contra)) {

		$consulta="UPDATE medico SET nombre='$nombre', correo='$email', privilegio='$privilegio', estatus='$estatus' WHERE cedula='$cedula'";
	}
	else{
		$consulta="UPDATE medico SET nombre='$nombre', pass=MD5('$contra'), correo='$email', privilegio='$privilegio', estatus='$estatus' WHERE cedula='$cedula'";
	}

	//En esta consulta se ejecuta la actualización y se modifican los datos del doctor
	
	$sql= mysqli_query($conexion,$consulta);


	//este if es el que comprueba que se haya hecho correctamente la consulta, en caso de que sí, se guarda la modificación, en caso de que no, envía una ventana emergente y no se guarda nada
	if ($sql) 
	{
		echo "
		
			<script> location.href='medicos.php';</script>
		";	
		/*<script>
          window.alert('El registro se ha modificado correctamente...');
        </script>*/
	}
	else
	{
		echo "
		
			<script> location.href='medicos.php';</script>
		";
		/*
		<script>
          window.alert('El registro no se ha modificado...');
        </script>
		*/
	}
	


?>