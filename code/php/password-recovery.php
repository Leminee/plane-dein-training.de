<!DOCTYPE html> 
<html lang="de"> 

<head>  
    
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=0.5"> 
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="account-recovery-style.css"> 
    <link rel="icon" href="media/logo.svg">   

    <title>
        Passwort-Wiederherstellung
    </title> 
</head> 


<body> 

 <?php  



 if(isset($_POST['send-email'])){  

    require_once("config.php"); 

    $email = htmlentities($_POST['email-address']); 
    
    $search_email = $conn->prepare("SELECT id_user FROM users WHERE e_mail = ?");
    $search_email->bind_param('s',$email); 
    $search_email-> execute();  
    $count = $search_email->get_result();  

    if($count -> num_rows ==1){
            $token = generateRandomString(25);
            $update = $conn->prepare("UPDATE users SET users.token = ? WHERE e_mail = ?");
            $update->bind_param('ss', $token, $email);
            $update->execute(); 

            mail($email, "Passwort zurücksetzen", "localhost/reset-password.php?token=".$token);

            echo header('Location:email-sent-success.html');
        } else {
            $error_email['email-address'] ="<i>$email</i>"." ist nicht registriert";
        }
    } 
      
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
?>  


<div class="description-text">  <h3>Gib Deine E-Mail-Adresse zum Zurücksetzen des Passworts ein</h3></div> 

<div id="email-input">  

<form action="password-recovery.php" method="POST"> 
<input type="email" name ="email-address" placeholder="E-Mail-Adresse" required>  
<br>
<?php if(count($error_email) >0): ?>    
        <div id="error-not">
                <?php foreach($error_email as $ror): ?> 
                     <?php echo $ror; ?> 
                    <?php endforeach?> 
                </div> 
                <?php endif;?>
<button id="submit-button" name ="send-email">Zurücksetzen</button>
</form>


</div>  

<style>  

#error-not{  
    position:absolute; 
    font-size:16px;
    background-color:#facccc;  
    opacity:0.9;
    width:auto; 
    border: 2px solid red;  
    text-align: center; 
    padding: 8px;  
    margin-left: 35%; 
    
    
} 
</style>

</body> 

</html>