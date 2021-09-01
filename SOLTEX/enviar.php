<?php
if (isset($_POST['correo']) && isset($_POST['mensaje']) ) {
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $from = $correo;
    $to = "soltex2021@hotmail.com";
    $subject = "Nuevo mensaje de: ". $correo;
    $message = $mensaje;
    $headers = "From:" . $from;

    if (email($from, $to, $subject,$message, $headers)) {
        $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $to;
  $contact->from_name = "ejemplo";
  $contact->from_email = $from;
  $contact->subject = $subject;

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'smtp.live.com',
    'username' => 'soltex2021@hotmail.com',
    'password' => 'soltex20',
    'port' => '587'
  );
  

  $contact->add_message($mensaje);

  echo $contact->send();
        echo 1;
    } else {
        echo 0;
    }
} else {
    echo 0;
}



?>