 <?php
 
 require_once("config.php");  

if(isset($_POST['submit-login'])){

    $email= htmlentities(trim($_POST['email-login'])); 
    $password = htmlentities($_POST['password-login']);  

    $salt = "iT!'2*€=-2^)#Ü*";  
    $password = md5($password.$salt); 

    $select = $conn->prepare("SELECT e_mail FROM users WHERE e_mail = ? AND password = ?"); 
    $select->bind_param('ss', $email, $password); 
    $select-> execute();  
    $result = $select ->get_result();


if($result->num_rows ==0){

    $error_login['password'] = "Anmeldedaten sind nicht richtig";   

}  

else { 

    header('Location:create-training-plan.php');  
    exit();
}
 
}

?> 
