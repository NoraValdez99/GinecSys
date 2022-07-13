<?php	
	require("conexion.php");

	//Se mandan a llamar las variables del archivo HTML y se guardan en una variable nueva en este PHP para que se pueda ejecutar en las consultas que se harán
	$citologia=$_POST['no_citologia'];
	$nombre=$_POST['nombre'];
	$edad=$_POST['edad'];
	$domicilio=$_POST['domicilio'];
	$telefono=$_POST['telefono'];
	//$fec_nac=$_POST['fec_nac'];
	$residencia=$_POST['residencia'];
	$edo_civil=$_POST['edo_civil'];
	$ocupacion=$_POST['ocupacion'];
	$escolaridad=$_POST['escolaridad'];
	$contacto=$_POST['contacto'];

//Primero con este select se pide la variable citología
	$checkmail='SELECT * FROM paciente  WHERE no_citologia=\''.$citologia.'\'';
	$query=mysqli_query($conexion , $checkmail);
	$check=mysqli_fetch_array($query);
//Con el select anterior, podemos verificar con este if si el número de citología no está repetido, si este número no se repite se agrega el nuevo registro, pero si el número existe, entonces manda una ventana emergente y no se guarda el registro
	if (!is_null($check)
			//|| $checkmailtrows>0) 
		)
		{
			echo ' <script language="javascript">alert("El número de citologia ya existe");</script> ';

			
			echo "<script>location.href='paciente_nuevo.php'</script>";
		}
		else
		{	
			//$sql1=("INSERT INTO medico (cedula, nombre, contra, email) VALUES ('$cedula, $nombre, $email, $contra')");
			$sql1="INSERT INTO paciente (id_paciente, no_citologia, nombre, edad, domicilio, telefono, residencia, edo_civil, ocupacion, escolaridad, contacto) VALUES ('','$citologia','$nombre','$edad','$domicilio','$telefono','$residencia', '$edo_civil.','$ocupacion','$escolaridad','$contacto')";

			$ejecutar=mysqli_query($conexion,$sql1);	

			if ($ejecutar) {
				//echo "<script>alert('Datos guardados');</script> ";

			echo "<script>location.href='pacientes.php'</script>";
			}else{
			}
		}
?>