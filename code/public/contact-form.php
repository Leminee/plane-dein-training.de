<?php 


if(isset($_POST['submit-contact'])):

    $firstname= htmlentities($_POST['firstname']); 
    $lastname= htmlentities($_POST['lastname']); 
    $email= htmlspecialchars($_POST['email-contact']); 
    $message = htmlentities($_POST['message-content']);

      @mail("lemine@plane-dein-training.de", "Kontaktformular",  
      'Vorname: '.$firstname.', Nachname: '.$lastname.', E-Mail-Adresse: '.$email.', Nachricht: '.$message, "From: $email");  

      header('Location: contact.html');  
      exit();
 

endif;



?>
