<?
//-------------------------------------------//
//----------- Validador de campos -----------//
//-------------------------------------------//
function comprobar_mail($mail){ 
  if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$mail)){ 
      header("Location: http://www.hotel-corrientes.com.ar/"); 
      exit; 
  } else { 
       return TRUE; 
  } 

}

function ValidarDatos($campo){
    //Array con las posibles cabeceras a utilizar por un spammer
    $badHeads = array("Content-Type:",
                                 "MIME-Version:",
                                 "Content-Transfer-Encoding:",
                                 "Return-path:",
                                 "Subject:",
                                 "From:",
                                 "Envelope-to:",
                                 "To:",
                                 "bcc:",
                                 "cc:",
                                 "@hotel-corrientes.com.ar");

    //Comprobamos que entre los datos no se encuentre alguna de
    //las cadenas del array. Si se encuentra alguna cadena se
    //dirige a una página de Forbidden
    foreach($badHeads as $valor){ 
      if(strpos(strtolower($campo), strtolower($valor)) !== false){ 
        header("Location: http://www.hotel-corrientes.com.ar/"); 
        exit; 
      }
    } 
  }
  
comprobar_mail($_POST['email']);
ValidarDatos($_POST['field-1']);
ValidarDatos($_POST['field-2']);
//ValidarDatos($_POST['empresa']);
//ValidarDatos($_POST['tipoevento']);
//ValidarDatos($_POST['nomevento']);
//ValidarDatos($_POST['fechaevento']);
ValidarDatos($_POST['field-4']);
ValidarDatos($_POST['field-5']);
//ValidarDatos($_POST['pais']);
//ValidarDatos($_POST['codpostal']);
ValidarDatos($_POST['field-6']);
//ValidarDatos($_POST['fax']);
//ValidarDatos($_POST['numasist']);
ValidarDatos($_POST['estadiadesde']);
ValidarDatos($_POST['estadiahasta']);
//ValidarDatos($_POST['d1armado']);
//ValidarDatos($_POST['d1cantidad']);
//ValidarDatos($_POST['d2armado']);
//ValidarDatos($_POST['d2cantidad']);
//ValidarDatos($_POST['d3armado']);
//ValidarDatos($_POST['d3cantidad']);
ValidarDatos($_POST['field-9']);


//-------------------------------------------//
//--------- Fin Validador de campos ---------//
//-------------------------------------------//


if(isset($_POST['enviar'])){

		$destinatario="demm9000@gmail.com";
		$responder="demm9000@gmail.com";
		$remite="demm9000@gmail.com";


        
		
		$remitente=" Corrientes Plaza Hotel - Reservas/Consultas ";
		
		$cabecera ="Date: ".date("l j F Y, G:i")."\n"; 
		$cabecera .="MIME-Version: 1.0\n"; 
		$cabecera .="From: ".$remitente."<".$remite.">\n";
		$cabecera .="Return-path: ". $remite."\n";
		$cabecera .="Reply-To: ".$responder."\n";
		$cabecera .="X-Mailer: PHP/". phpversion()."\n";
		$cabecera .="Content-Type: text/html; charset=\"ISO-8859-1\"\n";
		
		$titulo="Contacto Web";
		
		$mensaje="<style type=\"text/css\">
<!--
.style1 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
<body bgcolor=\"#990000\" style=\"margin:0px; \">
		<center>
		<table width=\"444\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#FFFFFF\" style=\"font-family:Arial, Helvetica, sans-serif; color:#5C574B; font-size:11px; \">
		  <!--DWLayoutTable-->
		  <tr>
			<td height=\"16\" colspan=\"3\" valign=\"top\"><!--DWLayoutEmptyCell-->&nbsp;</td>
			</tr>
		  <tr>
			<td width=\"412\" height=\"318\" valign=\"top\" ><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; color:#5C574B; font-size:11px; \">
			  <!--DWLayoutTable-->
			  <tr>
			    <td height=\"30\" colspan=\"2\" align=\"left\" valign=\"middle\" style=\"padding-left:5px;\" ><span class=\"style1\">Datos Personales</span></td>
			</tr>
			  <tr>
			    <td width=\"180\" height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>Nombre</strong></td>
			<td width=\"232\" valign=\"middle\">{$nombre}</td>
		  </tr>
			  <tr>
			    <td height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>Apellido</strong></td>
			<td valign=\"middle\">{$apellido}</td>
		  </tr>
			 
			  <tr>
			    <td height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>Direcci&oacute;n</strong></td>
			<td valign=\"middle\">{$direccion}</td>
		  </tr>
			  <tr>
			    <td height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>Ciudad</strong></td>
			<td valign=\"middle\">{$ciudad}</td>
		  </tr>
			  <tr>
			    <td height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>Pais</strong></td>
			<td valign=\"middle\">{$pais}</td>
		  </tr>
			  <tr>
			    <td height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>C&oacute;digo Postal </strong></td>
			<td valign=\"middle\">{$codpostal}</td>
		  </tr>
			  <tr>
			    <td height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>Tel&eacute;fono</strong></td>
			<td valign=\"middle\">{$telefono}</td>
		  </tr>
			  <tr>
			    <td height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>Email</strong></td>
			<td valign=\"middle\">{$email}</td>
		  </tr>
          
          <tr>
		        <td height=\"30\" colspan=\"2\" align=\"left\" valign=\"middle\" style=\"padding-left:5px;\" ><span class=\"style1\">Habitaciones</span></td>
	      </tr>
		      <tr>
		        <td width=\"180\" height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>Estadia</strong></td>
			<td width=\"232\" valign=\"middle\">{$estadia}</td>
		  </tr>
		      <tr>
		        <td height=\"20\" colspan=\"2\" valign=\"top\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; color:#5C574B; font-size:11px; \">
		          <!--DWLayoutTable-->
		          <tr>
		            <td width=\"150\" height=\"20\" valign=\"top\"><!--DWLayoutEmptyCell-->&nbsp;</td>
		    <td width=\"126\" valign=\"middle\"><strong>Desde:</strong> {$estadiadesde}</td>
	        <td width=\"136\" valign=\"middle\"><strong>Hasta:</strong> {$estadiahasta}</td>
		  </tr>
			  </table></td>
		  </tr>
		  
		      <tr>
		        <td height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>Categoría</strong></td>
		    <td valign=\"middle\">{$categoria}</td>
          </tr>
          <tr>
		        <td height=\"30\" colspan=\"2\" align=\"left\" valign=\"middle\" style=\"padding-left:5px;\" ><span class=\"style1\">Consultas</span></td>
	      </tr>
		      <tr>
		        <td width=\"180\" height=\"20\" align=\"right\" valign=\"middle\" style=\"padding-right:5px;\"><strong>Consulta</strong></td>
			<td width=\"232\" valign=\"middle\">{$consulta}</td>
		  </tr>
		      <tr>
		        <td height=\"0\"></td>
		        <td></td>
	          </tr>
		      
		      </table></td>
          </tr>
		  
		  <tr>
			<td height=\"16\" colspan=\"2\" valign=\"top\"><!--DWLayoutEmptyCell-->&nbsp;</td>
			</tr>
		</table>
		</center>
		</body>";
		
		 mail($destinatario, $titulo, $mensaje,$cabecera);
		 echo "<script>document.location='contacto_gracias.html'</script>"; 
		
		echo $mensaje;

}
?>
