<?php
$toEmail 		= "charly@alebrijestecnologias.com"; //Replace it recipient email address
$subject 		= 'Contacto página web'; //Subject line for emails

//Let's clean harmful characters from raw POST data using PHP Sanitize filters.
$postName 		       = filter_var($_POST["postName"], FILTER_SANITIZE_STRING); 
$postEmail 		       = filter_var($_POST["postEmail"], FILTER_SANITIZE_EMAIL);
$postPhone 		       = filter_var($_POST["postPhone"], FILTER_SANITIZE_STRING);
$postDatepicker	       = filter_var($_POST["postDatepicker"], FILTER_SANITIZE_STRING);
$postOtherDatepicker   = filter_var($_POST["postOtherDatepicker"], FILTER_SANITIZE_STRING);
$postMessage 	       = filter_var($_POST["postMessage"], FILTER_SANITIZE_STRING);

//Let's put additional php validation here
if(strlen($postName)<1) // If length is less than 1 we will throw an HTTP error.
{
	header('HTTP/1.1 500 Name Field Empty'); 
	exit();
}
//similar validation applies to all data, unless you want to replace with some other strong validation.
if(strlen($postEmail)<1)
{
	header('HTTP/1.1 500 Email Field Empty'); 
	exit();
}
if(strlen($postPhone)<1)
{
	header('HTTP/1.1 500 Phone Field Empty'); 
	exit();
}
if(strlen($postDatepicker)<1)
{
	header('HTTP/1.1 500 Fecha inicio Field Empty'); 
	exit();
}
if(strlen($postOtherDatepicker)<1)
{
	header('HTTP/1.1 500 Fecha final Field Empty'); 
	exit();
}
if(strlen($postMessage)<1)
{
	header('HTTP/1.1 500 Message Field Empty'); 
	exit();
}

//Finally we can proceed with PHP email.
$headers = 'From: '.$postEmail.'' . "\r\n" .
    'Reply-To: '.$postEmail.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
//Email Body
$Body = "";
$Body .= "Nombre: ";
$Body .= $postName;
$Body .= "\n";
$Body .= "\n";
$Body .= "Email: ";
$Body .= $postEmail;
$Body .= "\n";
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $postPhone;
$Body .= "\n";
$Body .= "\n";
$Body .= "Fecha inicio: ";
$Body .= $postDatepicker;
$Body .= "\n";
$Body .= "\n";
$Body .= "Fecha final: ";
$Body .= $postOtherDatepicker;
$Body .= "\n";
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $postMessage;
$Body .= "\n";
$Body .= "\n";


@$sentMail = mail($toEmail, $subject, $Body .'  -'.$postName,  $headers);

if(!$sentMail)
	{
		header('HTTP/1.1 500 Fallo en el envío'); 
		exit();
	}else{
		echo '<h3>Hola '.$postName.'</h3>
		<p>Tu correo se envió con éxito
		<br />Gracias por ponerte en contacto con nosotros</p>';
	}

?>