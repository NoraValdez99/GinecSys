<?php  

	//Este es el archivo que hace todo el proceso de modificar pacientes, primero se reciben las variables declaradas desde el HTML y se guardan en una nueva variable en este archivo

	require("conexion.php");
	$id=$_POST['id'];
	$cit=$_POST['citologia'];
	$nombre=$_POST['nombre'];
	$edad=$_POST['edad'];
	$domicilio=$_POST['domicilio'];
	$tel=$_POST['telefono'];
	$residencia=$_POST['residencia'];
	$edo_civil=$_POST['edo_civil'];
	$ocupacion=$_POST['ocupacion'];
	$escolaridad=$_POST['escolaridad'];
	$contacto=$_POST['contacto'];

//En esta consulta se modifican los registros 
	$consulta="UPDATE paciente SET nombre='$nombre', edad='$edad', domicilio='$domicilio', telefono='$tel', residencia='$residencia', edo_civil='$edo_civil', ocupacion='$ocupacion', escolaridad='$escolaridad', contacto='$contacto'  WHERE id_paciente='$id'";
	$sql= mysqli_query($conexion,$consulta);

	//Este if nos sirve en caso de que si se hayan modificado correctatemente los registros o en caso de que no
	if ($sql) 
	{
		echo "
		
			<script> location.href='perfil_paciente.php?id=".$id."';</script>
		";	
	}
/*<script>
          window.alert('El registro se ha modificado correctamente...');
        </script>*/

	else
	{
		echo "
		<script>
          window.alert('El registro no se ha modificado...');
        </script>
			<script> location.href='modificarpaciente.php?id=".$registros['id_paciente']."';</script>
		";
		/**/
	}
	
?>