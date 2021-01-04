<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="media/logo.svg">   
    <link rel="stylesheet" href="css/bootstrap.min.css"> 

    <title>Passwort zurücksetzen</title> 
    
</head>
<body> 
<?php
    if(isset($_GET["token"])){ 

        require_once("config.php"); 

        $email = htmlentities($_POST['email-address']); 
        
        $search_token = $conn->prepare("SELECT id_user FROM users WHERE token = ?");
        $search_token->bind_param('s',$_GET['token']); 
        $search_token-> execute();  
        $count = $search_token->rowCount(); 

        if($count != 0){
            if(isset($_POST["submit"])){ 
                $passwordone = htmlentities($_POST['pw1']);
                $passwordtwo = htmlentities($_POST['pw2']);
            
                if($passwordone == $passwordtwo){ 
                    $salt = "iT!'2*€=-2^)#Ü*";  
                    $passwordone = md5($passwordone.$salt); 
                    $stmt = $conn->prepare("UPDATE users SET users.password = ?, token = null WHERE token = ?");
                    $stmt->bind_param('s', $passwordone);
                    $stmt->bind_param('s', $_GET["token"]);
                    $stmt->execute();
                    echo 'Das Passwort wurde geändert <br>
                    <a href="index.php"></a>Login</a>';
                } else {
                    echo "Die Passwörter stimmen nicht überein";
                }
            }
            ?>
            <h1>Neues Passwort setzen</h1>
            <form action="red_password.php?token=<?php echo $_GET["token"] ?>" method="POST">
                <input type="password" name="pw1" placeholder="Password" required><br>
                <input type="password" name="pw2" placeholder="Password wiederholen" required><br>
                <button type="submit" name="submit">Passwort setzen</button>
            </form>
            <?php
        } else {
            echo "Der Token ist ungültig";
        }
    } else {
        echo "Kein gültiger Token gesendet";
    }
    ?>
    
</body>
</html>