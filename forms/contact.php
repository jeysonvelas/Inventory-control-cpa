<?php


// Varios destinatarios
$email = $_POST['email'];
$nombre = $_POST['name'];
$myEmail = "jeisonmixix@gmail.com";
$asunto = $_POST['subject'];
$message = $_POST['message'];
$para  =$myEmail . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Inventory control';


// mensaje
$mensaje = "<html>".
"<head><title>Inventory control</title>".
"<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-size: 16px;
    font-weight: 300;
    color: #888;
    background-color:rgba(230, 225, 225, 0.5);
    line-height: 30px;
    text-align: center;
}
.contenedor{
    width: 80%;
    min-height:auto;
    text-align: center;
    margin: 0 auto;
    padding: 40px;
    background: #ececec;
    border-top: 3px solid #E64A19;
}
.bold{
    color:#333;
    font-size:25px;
    font-weight:bold;
}
img{
    margin-left: auto;
    margin-right: auto;
    display: block;
    padding:0px 0px 20px 0px;
}
</style>
</head>".
"<body>" .
    "<div class='contenedor'>".
            "<span><b>Asunto:&nbsp;&nbsp;</b>" . $asunto . "</span><br/><br/>" .
            "<span><b>Nombre Completo:&nbsp;&nbsp;</b>" . $nombre . "</span><br/><br/>" .
            "<span><b>Correo o Email:&nbsp;&nbsp;</b>" . $email . "</span><br/>" .
            "<p>&nbsp;</p>" .
            "<p><strong>Mensaje: </strong> " . $message . " </p>" .
            "<p>&nbsp;</p>" .
"</div>" .
"</body>" .
"</html>";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Formulario de interes <jeisonmixix@gmail.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
$enviado =false;
if(mail($para, $título, $mensaje, $cabeceras)){
    $enviado=true;

    echo "OK";

}

?>