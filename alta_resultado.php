<?php
require("conexion.php");

error_reporting(0);

	$fk_paciente=$_POST['id_paciente'];

	    session_start();

	    $id=$_SESSION['id'];

/// RESULTADOS EXP FISICA DE MAMA

	$prese_masa=$_POST['prese_masa'];
	$umbilicacion=$_POST['umbilicacion'];
	$retraccion_piel=$_POST['retraccion_piel'];
	$piel_naranja=$_POST['piel_naranja'];
	$hipertemia=$_POST['hipertemia'];
	$ulceracion=$_POST['ulceracion'];

	$csed=$_POST['csed'];
	$csid=$_POST['csid'];
	$csii=$_POST['csii'];
	$csei=$_POST['csei'];

	$cied=$_POST['cied'];
	$ciid=$_POST['ciid'];
	$ciii=$_POST['ciii'];
	$ciei=$_POST['ciei'];

	$ult_mam=$_POST['ult_mam'];
	$secrecion=$_POST['secrecion'];
	$aumento_rvs=$_POST['aumento_rvs'];
	$mastalgia=$_POST['mastalgia'];
	$mastalgiau=$_POST['mastalgiau'];
	$r_birads=$_POST['r_birads'];

	
			$sql1="INSERT INTO r_exp_mama (
			id_r_exp, prese_masa, umbilicacion, retraccion_piel, piel_naranja, hipertemia, ulceracion, csed, csid, csii, csei, cied, ciid, ciii, ciei , ult_mam, secrecion, aumento_rvs, mastalgia, mastalgiau, r_birads ,fk_paciente) 
			 VALUES
			 ('', '$prese_masa', '$umbilicacion', '$retraccion_piel', '$piel_naranja', '$hipertemia', '$ulceracion', '$csed', '$csid', '$csii', '$csei', '$cied', '$ciid', '$ciii', '$ciei', '$ult_mam', '$secrecion', '$aumento_rvs', '$mastalgia', '$mastalgiau', '$r_birads', '$fk_paciente') 
			 ";

/////////////////////////

/// RESULTADOS CITOLOGIA
	$muestra=$_POST['muestra'];
	$v_est=$_POST['v_est'];
	$resultado=$_POST['resultado'];
	$salpingoclasia=$_POST['salpingoclasia'];
	$otros_hallazgos=$_POST['otros_hallazgos'];
	$n_e=$_POST['n_e'];
	$cocos=$_POST['cocos'];
	$bacilos=$_POST['bacilos'];
	$g_v=$_POST['g_v'];
	$monilias=$_POST['monilias'];
	$tricomonas=$_POST['tricomonas'];
	$actinomices=$_POST['actinomices'];
	$e_vph=$_POST['e_vph'];
	$e_h=$_POST['e_h'];
	$e_c=$_POST['e_c'];



			$sql2="INSERT INTO r_citologia (
			id_r_cit, muestra, v_est, resultado, salpingoclasia, otros_hallazgos, n_e, cocos, bacilos, g_v, monilias, tricomonas, actinomices, e_vph, e_h, e_c,fk_paciente) 
			 VALUES
			 ('', '$muestra', '$v_est', '$resultado', '$salpingoclasia', '$otros_hallazgos', '$n_e', '$cocos', '$bacilos', '$g_v', '$monilias', '$tricomonas', '$actinomices', '$e_vph', '$e_h', '$e_c', '$fk_paciente') 
			 ";
////////////////////////////////////

/// RESULTADOS colposcopia
	$colposcopia=$_POST['colposcopia'];
	$zona_t=$_POST['zona_t'];
	$resultados_c=$_POST['resultados_c'];
	$biopsia=$_POST['biopsia'];
	$lugar=$_POST['lugar'];
	$ecv=$_POST['ecv'];

	$l_ant=$_POST['l_ant'];
	$l_post=$_POST['l_post'];
	$otr_lab=$_POST['otr_lab'];

	$r1=$_POST['r1'];
	$r2=$_POST['r2'];
	$r3=$_POST['r3'];
	$r4=$_POST['r4'];
	$r5=$_POST['r5'];
	$r6=$_POST['r6'];
	$r7=$_POST['r7'];
	$r8=$_POST['r8'];
	$r9=$_POST['r9'];
	$r10=$_POST['r10'];
	$r11=$_POST['r11'];
	$r12=$_POST['r12'];

	$obs_les=$_POST['obs_les'];

	$test_schiller=$_POST['test_schiller'];
	$otros_hallazgoss=$_POST['otros_hallazgoss'];
	$observaciones=$_POST['observaciones'];



			$sql3="INSERT INTO r_colposcopia (
			id_r_col, colposcopia, zona_t, resultados_c, biopsia, lugar, ecv, l_ant, l_post, otr_lab, r1, r2, r3, r4, r5, r6, r7, r8, r9, r10, r11, r12, obs_les, test_schiller, otros_hallazgoss, observaciones ,fk_paciente) 
			 VALUES
			 ('', '$colposcopia', '$zona_t', '$resultados_c', '$biopsia', '$lugar', '$ecv', '$l_ant', '$l_post', '$otr_lab', '$r1', '$r2', '$r3', '$r4', '$r5', '$r6', '$r7', '$r8', '$r9', '$r10', '$r11', '$r12', '$obs_les', '$test_schiller', '$otros_hallazgoss', '$observaciones', '$fk_paciente') 
			 ";
////////////////////////////////////////////////////////////////

/// RESULTADOS biopsia
	$sistema_b=$_POST['sistema_b'];
	$observaciones_b=$_POST['observaciones_b'];
	
			$sql4="INSERT INTO r_biopsia (
			id_r_biopsia, sistema_b, observaciones_b ,fk_paciente) 
			 VALUES
			 ('', '$sistema_b', '$observaciones_b', '$fk_paciente') 
			 ";
////////////////////////////////////////////////////////////////

			 $sql5="INSERT INTO  `consulta` (`id_consulta`, `fk_cedula`, `fk_paciente`, `servicio`,`fecha`) VALUES ('','$id','$fk_paciente','Resultado',now())";



			 $ejecutar=mysqli_query($conexion,$sql1);	

			if ($ejecutar) {
				//echo '<script language="javascript">alert("Datos guardado EXP MAMA"); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}

			$ejecutar1=mysqli_query($conexion,$sql2);	

			if ($ejecutar1) {
				//echo '<script language="javascript">alert("Datos guardado CITOLOGIA"); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}

			$ejecutar2=mysqli_query($conexion,$sql3);	

			if ($ejecutar2) {
				//echo '<script language="javascript">alert("Datos guardado COLPOSCOPIA "); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}

			$ejecutar3=mysqli_query($conexion,$sql4);	

			if ($ejecutar3) {
				//echo '<script language="javascript">alert("Datos guardado BIOPSIA"); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}
			$ejecutar4=mysqli_query($conexion,$sql5);	

			if ($ejecutar4) {
				//echo '<script language="javascript">alert("Datos guardados"); </script> ';

			//echo "<script>location.href='home.php'</script>";
			}

echo "<script>location.href='pacientes.php'</script>";


?>