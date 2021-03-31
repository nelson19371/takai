<?php
     $destinatario = "sandoval19371@gmail.com";

     $nombre = $_POST['name'];

     $email = $_POST['email'];

     $asunto = $_POST['subject'];

     $mensaje = $_POST['mensaje'];


    $header= "Enviado desde la página";
    $mensajeCompleto = $mensaje. "Atentamente: " .$nombre;


    $mail= mail($destinatario,$asunto,$mensajeCompleto,$header,$email);
  
  if($mail) {
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo $nombre . $email . $asunto . $mensaje . $destinatario;
  }else{

  echo "<script>setTimeout(\"\location.href='index.html'\",1000)</script>";
  }


