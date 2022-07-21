<?
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $reason = $_REQUEST['reason'];
    $message = $_REQUEST['message'];
    $honeypot = $_REQUEST['middlename'];
    $default_sender = $email;
    $replier = "From: <" . $default_sender . ">";


if (empty($name) || empty($email) || empty($reason) || empty($message) || !empty($honeypot)){

  echo "Please fill in all form fields.";

  }

  else

  {

  mail ("jessa.vanderpoel@gmail.com", "JESSADESIGN: IMPORTANT MESSAGE FROM $name", "FORM SUBMIT:\n\nName: $name\nEmail: $email\nReason: $reason\nMessage: $message", $replier);

  header("Location: ../forms/thanks/index.html");

}

?>
