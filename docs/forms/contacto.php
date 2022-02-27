<?php 
$destinatario="sandoval19371@gmail.com";

if (isset($_POST['enviar'])){
    if(!empty($_POST['name'])&& !empty($_POST['email'])&& !empty($_POST['asunto'])&& !empty($_POST['msg'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $asunto= $_POST['asunto'];
        $msg= $_POST['msg'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail($destinatario,$asunto,$msg,$header);
        if ($mail) {
            echo "<h4>Mail enviado exitosamente!</h4>";

        }
    }

}else{
    echo "<h1>na que ver compare</h1>";

}


?>
