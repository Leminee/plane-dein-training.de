
<html lang="de">  

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/media/logo.svg">   
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="/assets/css/style-bmi.css">
    
    <title>BMI</title> 

</head> 

<body>   
    


<div class="bmi">   
   
<h4> <u>BMI</u></h4>
 
  
<form action="bmi.php" method="GET">  
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
<button type ="submit" name="calculate"> Berechnen </button>    
</div>   


</form>  



  
 
 
   
</body> 

<?php  

/*ini_set("display_errors", true){
error_reporting(E_ALL);*/
 
 if(isset($_GET['calculate'])){
 
        $body_size = $_GET['body-size']; 
        $body_weight = $_GET['body-weight'];  

        if(empty($body_size) ||empty($body_weight)) { 
            echo "<h3> Fülle bitte die Input-Felder aus</h3>"; 
            exit;
        } 

        else {

        $bmi =$body_weight / pow(($body_size/100),2);  
        $bmi = round($bmi, 1); 
 

        echo "<h5>Dein BMI: <span>".$bmi."</span> </h5>"; 

}
 
 if ($bmi <= 18.5){  

    echo "<h6> <i>Untergewicht</i> </h6>"; 
 } 
 elseif($bmi>=18.5 && $bmi <= 24.9) { 
 
    echo "<h6> <i>Normalgewicht<i> </h6>";

 }  
 elseif($bmi>= 25 && $bmi <= 29.9) { 
 
    echo "<h6> <i>Leichtes Übergewicht </i></h6>";

 }   

 else if($bmi>29.9 && $bmi <=60){  

    echo "<h6> <i>Übergewicht </i></h6>";
 }  

 else
   echo "<h6> <i>Alles klar...</i> </h6>";

} 
?>   
</div>  



<footer> Quelle: <a href="https://www.who.int/data/gho/data/themes/theme-details/GHO/body-mass-index-(bmi)" target="_blank"> WHO</footer> 


</html>