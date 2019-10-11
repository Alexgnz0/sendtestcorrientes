<?php  
 
date_default_timezone_set('America/Argentina/Buenos_Aires');

$bodyMail = 'lorem inpuasda';

$fecha = date("d/m/Y");
require_once 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtps.corrientes.gob.ar';
	$mail->Port = 995;
	
	$mail->Username = 'rubricadigital.mailsend@corrientes.gob.ar'; //Correo de donde enviaremos los correos
	$mail->Password = '$rd#1008'; // Password de la cuenta de envío
	
	$mail->setFrom('rubricadigital.mailsend@corrientes.gob.ar', 'test');
	$mail->addAddress('alexisgonzalezemmanuel@gmail.com', 'Receptor'); //Correo receptor
	
	
	$mail->Subject = 'Denuncia Laboral';
	$mail->Body = $bodyMail;
	
	$mail->isHTML(true);

	if($mail->send()) {
		header('Location: index.php');
		} else {
		echo 'Error al enviar correo';
		echo "<br>";
		echo $mail->ErrorInfo;
	}

?>