<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "reservas@hotel-corrientes.com.ar";
$email_subject = "Contacto desde el sitio web";
$email_from = "Corrientes Plaza Hotel - Reservas/Consultas";

$email_subject="Contacto Web";


// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Este mensaje ha sido enviado desde su sitio web:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "DNI: " . $_POST['dni'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Telefono: " . $_POST['telephone'] . "\n";
$email_message .= "Horario de contacto: " . $_POST['time'] . "\n\n";
$email_message .= "Desde: " . $_POST['estadiadesde'] . "\n\n";
$email_message .= "Hasta: " . $_POST['estadiahasta'] . "\n\n";
$email_message .= "Habitacion: " . $_POST['room'] . "\n\n";
$email_message .= "Noches: " . $_POST['nights'] . "\n\n";
$email_message .= "Pasajeros: " . $_POST['passengers'] . "\n\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";



// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
		 echo "<script>document.location='contacto_gracias.php'</script>"; 
		
		echo "¡El formulario se ha enviado con éxito!";
}
?>