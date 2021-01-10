
<?php 

require_once("config.php"); 

$username = htmlentities(trim($_POST['username'])); 
$password = htmlentities($_POST['password']);  
$passwordTwo = htmlentities($_POST['passwordR']);  
$email = htmlentities(trim($_POST['email']));     


if(isset($_POST['register'])):
 

    $search_email = $conn->prepare("SELECT id_user FROM users WHERE e_mail = ?"); 
    $search_email->bind_param('s',$email); 
    $search_email->execute(); 
    $search_email_result = $search_email->get_result();  

    if($password == $passwordTwo):    

        $salt = "iT!'2*€=-2^)#Ü*";  
        $password = md5($password.$salt);  

    if($search_email_result -> num_rows ==0):
    


    
    $insert = $conn->prepare("INSERT INTO users (username, password, e_mail, create_date)
    VALUES (?,?, ?, CURRENT_TIMESTAMP)");  
    $insert->bind_param('sss', $username, $password, $email); 
    $insert_result =$insert-> execute();    


 
if ($insert_result):  
 
    header('Location:registration-success.html'); 
    exit();

endif; 


else: 
    $error['email'] = "<i>$email</i>"." ist<wbr> bereits <wbr>registriert"; 
    

endif;

else: 
    $error['password'] = "Passwörter stimmen nicht überein"; 
    
    
endif;  

endif;


?>  
