<?php


	//recibir las variables con el método post
	$email=filter_input(INPUT_POST, "email");
	$contra=filter_input(INPUT_POST, "contra");


	require("conexion.php");

	$sql= mysqli_query($conexion,"SELECT * FROM medico WHERE email='$email'");


	//comprobar que el correo exista
	if($usr=mysqli_fetch_array($sql))
	{
		
		if($contra==$usr['contra'])
		{

			//Correo y contraseña correctos

			//guardar respuestas en un arreglo
			$result['success'] = "1";
			$result['message'] = "Sesión iniciada";
			$result['id'] = $usr['id_usuario'];
							
			//Traducir arreglo a json
			echo json_encode($result);
						
		}
		else
		{

			//Correo registrado, contraseña incorecta
			$result['success'] = "2";
			$result['message'] = "Contraseña incorrecta";
			$result['id'] = " ";

			echo json_encode($result);
			
		}

	}
	else
	{
		
		$result['success'] = "3";
		$result['message'] = "Correo no registrado";
		$result['id'] = " ";
						
		echo json_encode($result);

	}

?>