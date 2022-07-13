
<?php

/* $link=mysql_connect("localhost","root","");

if ($link) {
	mysql_select_db($link,"practica");
	# code...
}
$checkbox=$_POST['checkbox'];
foreach ($checkbox as $llave => $valor) {
	# code...
	$ficha="INSERT INTO planificacion_familiar SET hormonales='$valor'";
	$ejecutar_insertar=mysql_query($link ,$ficha);

}

if (isset($_POST['almacenar'])) {
	# code...
	$secrecion_vaginal=$_POST['opcion2'];
	$sangrado_vaginal=$_POST['opcion1'];
}



 */



require("conexion.php");

error_reporting(0);

	$fk_paciente=$_POST['id_paciente'];

	    session_start();

	    $id=$_SESSION['id'];

	   


	$menarca=$_POST['menarca'];
	$ritmo=$_POST['ritmo'];
	$fur=$_POST['fur'];
	$ivsa=$_POST['ivsa'];
	$parejas_sexuales=$_POST['parejas_sexuales'];
	$g=$_POST['g'];
	$p=$_POST['p'];
	$c=$_POST['c'];
	$a=$_POST['a'];
	$primera_gesta=$_POST['primera_gesta'];
	$amenorrea=$_POST['amenorrea'];
	$meses_amenorrea=$_POST['meses_amenorrea'];
	//$embarazo=$_POST['embarazo'];
	//$lactancia=isset($_POST['lactancia']);
	$meno_fisi=$_POST['meno_fisi'];
	$meno_quiru=$_POST['meno_quiru'];
	$citologia_previa=$_POST['citologia_previa'];
	$fech_ultimacitologia=$_POST['fech_ultimacitologia'];
/*	$ivph=isset($_POST['ivph']);
	$liebg=isset($_POST['liebg']);
	$lieag=isset($_POST['lieag']);
	$carcinoma_epidermoide=isset($_POST['carcinoma_epidermoide']);
	$adenocarcinoma=isset($_POST['adenocarcinoma']);
*/
	
			$sql1='INSERT INTO antecedentes_ginecoobstetricos (
			menarca,ritmo,fur,ivsa, parejas_sexuales,
			g,p,c,a,primera_gesta,amenorrea,
			meses_amenorrea,
			menopausia_fisiologica,menopausia_quirurgica,
			citologia_previa,ultima_cirugia,fk_paciente) 
			 VALUES 
			 (\''.$menarca.'\',\''.$ritmo.'\',
			 \''.$fur.'\', \''.$ivsa.'\',
			 \''.$parejas_sexuales.'\',
			 \''.$g.'\',\''.$p.'\',
			 \''.$c.'\',\''.$a.'\',
			 \''.$primera_gesta.'\',
			 \''.$amenorrea.'\',
			 \''.$meses_amenorrea.'\',
			 \''.$meno_fisi.'\',
			 \''.$meno_quiru.'\',
			 \''.$citologia_previa.'\',
			 \''.$fech_ultimacitologia.'\',
			 \''.$fk_paciente.'\')';


			 //******************TRATAMIENTOS PREVIOS
			 //Sixtaxis para recibir variables


			 $ivph=$_POST['ivph'];
			 $condilomas=$_POST['condilomas'];
			$liebg=$_POST['liebg'];
			$lieag=$_POST['lieag'];
			$carcinoma_epidermoide=$_POST['carcinoma_epidermoide'];
			$adenocarcinoma=$_POST['adenocarcinoma'];
			 $legrado=$_POST['legrado'];
			 $electrocoagulacion=$_POST['electrocoagulacion'];
			 $quirurgico=$_POST['quirurgico'];
			 $radiacion=$_POST['radiacion'];
			 $hormonal=$_POST['hormonal'];
			 $quimioterapia=$_POST['quimioterapia'];
			
  			//Consulta de inserción de datos para el formulario de tratamientos previos
			$sql2='INSERT INTO tratamientos_previos 
			(id_tratamientos, ivph, condilomas,liebg,
			 lieag,carcinoma_epidermoide,adenocarcinoma, legrado,electrocoagulacion,quirurgico,radiacion,hormonal,quimioterapia, fk_paciente) 
			 VALUES 
			 ("",
			 \''.$ivph.'\',\''.$condilomas.'\',\''.$liebg.'\',
			 \''.$lieag.'\',\''.$carcinoma_epidermoide.'\',
			 \''.$adenocarcinoma.'\',\''.$legrado.'\',\''.$electrocoagulacion.'\',
			 \''.$quirurgico.'\', \''.$radiacion.'\',
			 \''.$hormonal.'\',
			 \''.$quimioterapia.'\',
			 \''.$fk_paciente.'\')';

			
			//*******************ANTECEDENTES PERSONALES PATOLÓGICOS

			 $tabaquismo=$_POST['tabaquismo'];
			 $no_cigarrillos=$_POST['no_cigarrillos'];
			 $anios_fumando=$_POST['anios_fumando'];
			 $alcoholismo=$_POST['alcoholismo'];

			$tipo_bebida=$_POST['tipo_bebida'];
			$frec_alc=$_POST['frec_alc'];
			$anios_tomando=$_POST['anios_tomando'];


			 $toxicomanias=$_POST['toxicomanias'];
			 $cuales_toxicomanias=$_POST['cuales_toxicomanias'];
			$anios_consumiendo=$_POST['anios_consumiendo'];


			 $sql3="INSERT INTO `antecedentes_personales_patologicos`(`id_antecedentesp`, `tabaquismo`, `no_cigarrillos`, `anios_fumando`, `alcoholismo`, `tipo_bebida`, `frec_alc`, `anios_tomando`, `toxicomanias`, `cuales_toxicomanias`, `anios_consumiendo`, `fk_paciente`) VALUES ('','$tabaquismo','$no_cigarrillos','$anios_fumando','$alcoholismo','$tipo_bebida','$frec_alc','$anios_tomando','$toxicomanias','$cuales_toxicomanias','$anios_consumiendo','$fk_paciente')";


			 //**********************SIGNOS Y SÍNTOMAS 
			 
			 $secrecion_vaginal=$_POST['secrecion_vaginal'];
			 $sangrado_vaginal=$_POST['sangrado_vaginal'];
			 $prurito=$_POST['prurito'];
			 $escozor=$_POST['escozor'];
			 $sangrado_coito=$_POST['sangrado_coito'];
			 $dispareunia=$_POST['dispareunia'];
			 $dolor_pelvico=$_POST['dolor_pelvico'];
			 $otros=$_POST['otros_sinto'];
			 $observaciones=$_POST['observaciones'];

			 $sql4="INSERT INTO `signos_sintomas`(`id_signo`, `secrecion_vaginal`, `sangrado_vaginal`, `prurito`, `escozor`, `sangrado_coito`, `dispareunia`, `dolor_pelvico`,`otros`,`observaciones`,`fk_paciente`) VALUES ('','$secrecion_vaginal','$sangrado_vaginal','$prurito','$escozor','$sangrado_coito','$dispareunia','$dolor_pelvico','$otros','$observaciones','$fk_paciente')";


			 //**********************MÉTODO DE PLANIFICACIÓN FAMILIAR
			 $oral=$_POST['oral'];
			 $parche=$_POST['parche'];
			 $inyectable=$_POST['inyectable'];
			 $implante=$_POST['implante'];
			 $tcu380a=$_POST['tcu380a'];
			 $mirena=$_POST['mirena'];
			 $metodos_barrera=$_POST['metodos_barrera'];
			 $espermicida=$_POST['espermicida'];
			 $anillo_vag=$_POST['anillo_vag'];
			 $condon=$_POST['condon'];
			 $bilings=$_POST['bilings'];
			 $coito_interrumpido=$_POST['dolor_pelvico'];
			 $salpingoclasia=$_POST['salpingoclasia'];
			 $vasectomia=$_POST['vasectomia'];
			 $ninguno=$_POST['ninguno'];
			 $tiempo_interrumpido=$_POST['tiempo_interrumpido'];
			 $especifique=$_POST['especifique'];			 
			 $observaciones_plan=$_POST['observaciones_plan'];

			  $sql5="INSERT INTO `planificacion_familiar` (`id_planfam`,`oral`,`parche`,`inyectable`,`implante`, `tcu380a`,`mirena`,`metodo_barrera`,`espermicida`,`anillo_vag`,`condon`,`bilings`,`coito_interrumpido`,`salpingoclasia`,`vasectomia`,`ninguno`,`tiempo_interrumpido`,`especifique`,`observaciones`,`fk_paciente`) VALUES ('','$oral','$parche','$inyectable','$implante','$tcu380a','$mirena','$metodos_barrera','$espermicida','$anillo_vag','$condon','$bilings','$coito_interrumpido','$salpingoclasia','$vasectomia','$ninguno','$tiempo_interrumpido','$especifique','$observaciones_plan','$fk_paciente')";
				

///////////////////////////////////////////////////////////////////////////////
			  $sql6="INSERT INTO  `consulta` (`id_consulta`, `fk_cedula`, `fk_paciente`, `servicio`,`fecha`) VALUES ('','$id','$fk_paciente','Papanicolaou',now())";



				
			
			 $ejecutar=mysqli_query($conexion,$sql1);	

			if ($ejecutar) {
				//echo '<script language="javascript">alert("Datos guardado AGCBT"); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}

			 $ejecutar1=mysqli_query($conexion,$sql2);	

			if ($ejecutar1) {
				//echo '<script language="javascript">alert("Datos guardados TP"); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}
			

			 $ejecutar2=mysqli_query($conexion,$sql3);	

			if ($ejecutar2) {
				//echo '<script language="javascript">alert("Datos guardados APP"); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}


			 $ejecutar3=mysqli_query($conexion,$sql4);	

			if ($ejecutar3) {
				//echo '<script language="javascript">alert("Datos guardados SS"); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}
			
			$ejecutar4=mysqli_query($conexion,$sql5);	

			if ($ejecutar4) {
				//echo '<script language="javascript">alert("Datos guardados PF"); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}
			$ejecutar5=mysqli_query($conexion,$sql6);	

			if ($ejecutar5) {
				//echo '<script language="javascript">alert("REGISTRO COMPLETO"); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}


			 
echo "<script>location.href='pacientes.php'</script>";
			
		


?>

