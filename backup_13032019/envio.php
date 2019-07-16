<? //Recepcion de datos
$nombre=$_POST['nombre'];
$nombre=$_POST['telefono'];
$nombre=$_POST['email'];
$nombre=$_POST['mensaje'];
//fin de recepcion de datos
//accion de envio
//------//
$para='ventas@corsec.com.mx';
$mensaje='
Mensaje de:
'.$nombre.'
telefono:
'.$telefono.'
email:
'.$email.'
mensaje:
'.$mensaje.'
';
$desde='From'.$correo.'ventas@corsec.com.mx';
ini_set(sendmail_from,'ventas@corsec.com.mx');
mail($para,$telefono,$mensaje,$desde);
echo'Gracias mensaje enviado';