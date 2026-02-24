<?php
if($_POST['g-recaptcha-response'] == null || !isset($_POST['g-recaptcha-response']) || $_POST['g-recaptcha-response'] == ''){
    echo "<script>alert('Complete el reCAPTCHA para continuar')</script>";
    echo "<script>window.location.replace('index.html#contacto');</script>";
    return;
}elseif(isset($_POST['nombre']) && isset($_POST['estado']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['mensaje'])){
    $nombre= trim($_POST['nombre']);
    $estado = trim($_POST['estado']);
    $telefono = trim($_POST['telefono']);
    $correo = trim($_POST['correo']);
    $mensaje = trim($_POST['mensaje']);
    
    $message = "Nombre: " . $nombre . "\n Estado: ". $estado . "\n Telefono de contacto: " . $telefono .  "\n Correo: " . $correo  .  "\n Mensaje: " . $mensaje  ;


    $response = $_POST['g-recaptcha-response'];
    $secret = '6LcPiXUsAAAAAK9M3TXYXI6L6XpBzLlXET9VOufk'; //clave secreta
    $url = "https://www.google.com/recaptcha/api/siteverify";

    


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 
        http_build_query(
            array(
                'secret'=>$secret,
                'response'=>$response
            )
        )
    );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($result);

    if($result->success){
        $to = 'kryzanthas@gmail.com';
        // $to = 'alejandropalomares.pediatra@gmail.com';
        $subject = 'Formulario de contacto';


        $mail = mail($to, $subject, $message);
        if($mail){
            echo "<script>alert('Formulario enviado con exito')</script>";
            echo "<script>window.location.replace('index.html');</script>";
            return;
        }else{
            echo "<script>alert('Ocurrio un error al enviar el formulario')</script>";
            echo "<script>window.location.replace('index.html');</script>";
            return;
        }
    }

}else{
    echo "<script>alert('Llene todos los campos obligatorios del formulario para continuar')</script>";
    echo "<script>window.location.replace('index.html#contacto');</script>";
    return;
}

?>