<?php
	
	//Este es el archivo de eliminar un paciente	
	require("conexion.php");
	$id=$_GET['id'];

	//En cada variable se hace un DELETE ya que son las tablas que abarca el paciente, de tal manera que ya no quede ningún registro del paciente que se quiere eliminar
	$sql0= mysqli_query($conexion,'DELETE FROM antecedentes_ginecoobstetricos WHERE fk_paciente=\''.$id.'\'');
	$sql1= mysqli_query($conexion,'DELETE FROM antecedentes_personales_patologicos WHERE fk_paciente=\''.$id.'\'');
	$sql2= mysqli_query($conexion,'DELETE FROM biopsia WHERE fk_paciente=\''.$id.'\'');
	$sql3= mysqli_query($conexion,'DELETE FROM cancer_mama WHERE fk_paciente=\''.$id.'\'');
	$sql4= mysqli_query($conexion,'DELETE FROM citologia WHERE fk_paciente=\''.$id.'\'');
	$sql5= mysqli_query($conexion,'DELETE FROM diagnostico_colposcopico WHERE fk_paciente=\''.$id.'\'');
	$sql6= mysqli_query($conexion,'DELETE FROM patron_microbiano_viral WHERE fk_paciente=\''.$id.'\'');
	$sql7= mysqli_query($conexion,'DELETE FROM planificacion_familiar WHERE fk_paciente=\''.$id.'\'');
	$sql8= mysqli_query($conexion,'DELETE FROM signos_sintomas WHERE fk_paciente=\''.$id.'\'');
	$sql9= mysqli_query($conexion,'DELETE FROM tratamientos_previos WHERE fk_paciente=\''.$id.'\'');
	$sql10= mysqli_query($conexion,'DELETE FROM r_biopsia WHERE fk_paciente=\''.$id.'\'');
	$sql11= mysqli_query($conexion,'DELETE FROM r_citologia WHERE fk_paciente=\''.$id.'\'');
	$sql12= mysqli_query($conexion,'DELETE FROM r_colposcopia WHERE fk_paciente=\''.$id.'\'');
	$sql13= mysqli_query($conexion,'DELETE FROM r_exp_mama WHERE fk_paciente=\''.$id.'\'');




	$sql10= mysqli_query($conexion,'DELETE FROM paciente WHERE id_paciente=\''.$id.'\'');
	


	if ($sql10) 
	{
		echo "
		
			<script> location.href='pacientes.php'; </script>
			";
	}else
	{
		echo "
		<script>
          window.alert('El registro no se ha eliminado.');
       	<script> location.href='perfil_paciente.php?id=".$id."';</script>

        </script>";
	}

?>