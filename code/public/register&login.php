<?php include('register-server.php') ?> 
<?php include ('login-server.php') ?>
  
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=0.5">

    <title>Anmelden oder Registrieren</title> 

    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
   ></script>  

   <noscript> Dein Browser unterstüzt kein JavaScript</noscript> 
   
 <link rel="stylesheet" href="assets/css/style-login-and-register.css">  
 <link rel="icon" href="assets/media/logo.svg">  
  

</head> 


<body>  


    
  	<div class="login-reg-panel"> 

		<div class="login-info-box">
			<h2 id="ha">Hast du schon einen Account?</h2>
			<label id="label-register" for="log-reg-show">Anmelden</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2 id="du">Hast Du noch keinen Account?</h2>
			<label id="label-login" for="log-login-show">Registrieren</label>
            <input type="radio" name="active-log-panel" id="log-login-show" required> 
            
        </div> 
        

							
		<div class="white-panel">
			<div class="login-show"> 
                <form action ="" method="POST">
				<h2>Anmelden</h2>
				<input name="email-login" type="email" placeholder="E-Mail-Adresse" required>
                <input name="password-login" type="password" placeholder="Passwort" required> 
                <?php if(count($error_login) >0): ?>  
                <div class ="alert">   
                <?php foreach($error_login as $ror): ?> 
                     <?php echo $ror; ?> 
                    <?php endforeach?> 
                </div> 
                <?php endif;?> 
                <button name ="submit-login" type ="submit" id=button-login>Anmelden</button>
                </form> 
            <a id ="passwort-forgot" href="password-recovery.php">Passwort vergessen?</a> 

            </div> 
            

			<div class="register-show"> 
            
                <h2 id="regis">Registrieren</h2>   
                <form action="" method="POST">
				<input name="username" type="text" placeholder="Username" minlength="3" maxlength="20" required>
				<input name="password" type="password" placeholder="Passwort" minlength="4" maxlength="50" required>
                <input name="passwordR" type="password" placeholder="Passwort wiederholen"  minlength="4" maxlength="50"required>   
                <input name ="email" type="email" placeholder="E-Mail-Adresse" maxlength="50" required>  
                <?php if(count($error) >0): ?>  
                <div class ="alert">   
                <?php foreach($error as $ror): ?> 
                     <?php echo $ror; ?> 
                    <?php endforeach?> 
                </div> 
                <?php endif;?> 

                <button name="register" type="submit" id="button-register" >Registrieren</button> 
                </form>
				
			</div>
        </div> 
        
    </div> 
     
    <script type="text/javascript" src="assets/js/register&login.js"></script>

      

  
</body>
</html>
