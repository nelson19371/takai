<?php 
$name= $_POST['name'];
$asunto2= $_POST['asunto2'];
$asunto= $_POST['asunto'];
$msg= $_POST['msg'];
echo $name,$asunto2,$asunto2,$msg;

if (isset($_POST['enviar'])){
    if(!empty($_POST['name'])&& !empty($_POST['asunto'])&& !empty($_POST['msg'])){
        $name= $_POST['name'];
        $email="sandoval19371@gmail.com";
        $asunto= $_POST['asunto'];
        $msg= $_POST['msg'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To:".$asunto2. "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail('contactotakai@gmail.com',$asunto,$msg,$header,$asunto2);
        if ($mail) {
            echo "<h4>Mail enviado exitosamente!</h4>";

        }
    }else{
        echo "<h1>Los datos no coinciden</h1>";
    }

}else{
    echo "<h1>wena</h1>";

}
?>

<!--
 <form action="contacto.php" method="post">
<input type= "text" placeholder="name" name="name">

<input type= "text" placeholder="email" name="email">

<input type= "text" placeholder="asunto" name="asunto">
<textarea placeholder="mensaje" name="msg"></textarea>
<input type="submit" name="enviar" value="Enviar" id="enviar">
<form>
-->
