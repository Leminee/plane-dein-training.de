<?php 


if(isset($_POST['submit-contact'])):

    $firstname= htmlentities($_POST['firstname']); 
    $lastname= htmlentities($_POST['lastname']); 
    $email= htmlentities($_POST['email-contact']); 
    $message = htmlentities($_POST['message-content']);

      mail("", "Kontaktformular",  
      'Vorname: '.$firstname.', Nachname: '.$lastname.', E-Mail-Adresse: '.$email.', Nachricht: '.$message);  

      header('Location: contact.html');  
      exit();
 

endif;



?>
