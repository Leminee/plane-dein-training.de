<html lang="de">  

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="text/css" href="media/logo.svg">   
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style-bmi.css">
    
    <title>IDEALGEWICHT</title> 

</head> 

<body>   
    


<div class="bmi">   
   
<h4> <u>IDEALGEWICHT</u></h4>
 
  
<form action="ideal-weight.php" method="GET">  
   
<div>  
<label>Alter:</label></br>
<input type="number" name="age">   
</div>  
<div>
<label>Körpergröße in cm:</label></br>
<input type="number" name="body-size">   
</div> 
<div>
<label> Körpergewicht in kg:</label> </br>
<input type="number" name="body-weight">  
</div>  
<br>
<div>
<button type ="submit" name="calculate-ideal-weight"> Berechnen </button>    
</div>   


</form>  



  
 
 
   
</body> 

<?php  

 
 if(isset($_GET['calculate-ideal-weight'])){
 
        $body_size = $_GET['body-size']; 
        $body_weight = $_GET['body-weight'];   
        $age = $_GET['age'];

        if(empty($age) ||empty($body_size) ||empty($body_weight)) { 
            echo "<h3> Fülle bitte die Input-Felder aus</h3>"; 
            exit;
        } 

        else {

        $idweight = (($body_size -100) + ($age/10))*0.9*0.9;
        $idweight = round($idweight, 1); 
 

        echo "<h5>Dein Idealgewicht: <span>".$idweight."</span></h5>"; 

        } 
}
 

?>   
  



<footer>   
    <p>Angewandte Formel: <a href="https://praxistipps.focus.de/creff-formel-das-steckt-dahinter_115318#:~:text=Der%20BMI%20rechnet%20K%C3%B6rpergewicht%20geteilt,und%20Alter%20geteilt%20durch%2010." target="_blank"> Creff-Formel</p>
    </footer> 


</html>