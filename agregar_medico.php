<?php
	
	require("conexion.php");

	//Se vinculan las variables del HTML con estas de PHP para poder ejecutar la consulta
	$cedula=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$contra=$_POST['contra'];
	$email=$_POST['email'];
	$privilegio=$_POST['privilegio'];
	$estatus=$_POST['estatus'];


	//Se pide información del email en este select
	$consulta="SELECT * FROM medico  WHERE correo='$email'";
	$query=mysqli_query($conexion,$consulta);
	$check=mysqli_num_rows($query);

		//$consulta='SELECT * FROM patron_microbiano_viral WHERE fk_paciente=\''.$id.'\'';

		// mysqli_query($success, "SELECT * FROM login WHERE username = '".$_POST['username']."' and password = '".md5($_POST['password'])."'");

	
	//Aquí se evalua que no exista el email que se va a registrar, en caso de que si exista, no se registra nada, y en caso contrario, se guarda el nuevo registro

	if ($check>0){
		
			echo "<script>alert('El correo electrónico ya se encuentra registrado');</script>";
			echo "<script>location.href='nuevo_medico.php'</script>";
		}else{	
			//$sql1=("INSERT INTO medico (cedula, nombre, contra, email) VALUES ('$cedula, $nombre, $email, $contra')");
			$sql1="INSERT INTO medico (cedula, nombre, pass, correo, privilegio, estatus) VALUES ('$cedula','$nombre',MD5('$contra'),'$email','$privilegio','$estatus')";
			$ejecutar=mysqli_query($conexion,$sql1);	

			if ($ejecutar) {
				//echo ' <script language="javascript">alert("Datos guardados"); </script> ';

			echo "<script>location.href='medicos.php'</script>";
			}
			
		}
?>