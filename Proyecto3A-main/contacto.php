
<?php
require 'Vista_Contactanos.php';





if(isset($_POST['Enviar'])){
   $Nombre = $_POST['Nombre'];
   $Email = $_POST['Email'];
   $Empresa = $_POST['Empresa'];
   $TextArea = $_POST['TextArea'];
   if(!empty($mail) && !empty($Nombre) && !empty($Empresa) && !empty($TextArea)    ){
$Nombre = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING); 
$Email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
$Empresa = filter_var($_POST['Empresa'], FILTER_SANITIZE_STRING); 
$TextArea = filter_var($_POST['TextArea'], FILTER_SANITIZE_STRING);

   $destino ='2123100459@soy.utj.edu.mx';
   $asunto = 'Email de prueba 1 GG FF PAPA';
      //Al puro chingadazo asi se va a ver 
 $cuerpo = '
      
 <html>
<head>
<title> test 1 </title> 

   </head>
   <body>
   <h3> email:'.$Nombre.' </h3>
   
    <p> : '.$TextArea.'</p>
   </body>
   </html>
 ';

//Envio del formato 
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $mail\r\n";
$headers .= "Return-path: $destino\r\n";

$headers .="Return-path: $destino\r\n";
mail($destino,$asunto,$cuerpo.$headers);
echo'<script type="text/javascript">
alert("Correo Enviado");
window.location.href="contactanos.html";
</script>';


   }else{
    echo'<script type="text/javascript">
    alert("Error al enviar el email");
    
    </script>';
   }


}else{
    echo'<script type="text/javascript">
alert("Datos incompletos");

</script>';
}




?>