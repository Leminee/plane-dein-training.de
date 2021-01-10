<?php include('contact-form.php') ?>

<html lang="de"> 

  <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=0.7">  
     <meta description="plane-dein-training.de bietet die Möglichkeit, einen Trainingpan zu erstellen und sich
     die Ausführung vieler Fitnessübungen mit Videos und Beschreibung anzuzeigen."> 
     <meta keywords="Trainingsplan, Fitness, Trainingsplan erstellen, BMI, Fitnessübungen"> 
     <meta name="author" content="Lemine" /> 
     <meta name="robots" content="index"/> 
     <meta name="robots" content="follow"/>  
     <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
    <link rel="icon" href="assets/media/logo.png"> 
    <title>plane-dein-training</title> 


  </head> 

  <body>  

    <header>
      <nav>
        <ul>
          <li id="logo"><a href="#"><img name="website-logo" alt="Logo" src="assets/media/logo.png" height="30px"></a></li>
          <li><a href="#contact">Kontaktiere mich</a></li>  
          <li><a href="assets/exercises.html" target="_blank">Fitnessübungen</a></li> 
          <li><a href="register&login.php">Anmelden</a></li>
        </ul>
      </nav> 

      <div class="background-principal-image"> 
        <h1>Erstelle kostenlos Deinen Trainingsplan</h1>  

        <button id="create-plan"> <a id="mouse-over-link-create-plan" href="register&login.php"> Trainings<wbr>plan erstellen</a></button>
        
      </div>

    </header>  

<main>


    <section id="stape-to-plan">
      <div class="text-intro">
        <h2>Drei Schritte bis zu Deinem Trainingsplan </h2>
        
      </div>
      <div id="illustration">
        <div class="image-illustration">
          <h6 class="stape-font"> Schritt 1/3 </h6> 
          <h4>Registriere Dich</h4>
          <img src="assets/media/register.png"  alt="Bild - erster Schritt zum Erstellen eines Trainingsplans">
        </div>
        <div class="image-illustration">
          <h6 class="stape-font">Schritt 2/3</h6> 
          <h4>Melde Dich an</h4>
          <img src="assets/media/login.png" alt="Bild - zweiter Schritt zum Erstellen eines Trainingsplans">
        </div>
        <div class="image-illustration">
          <h6 class="stape-font">Schritt 3/3</h6> 
          <h4>Erstelle Deinen Trainingsplan</h4>
          <img src="assets/media/createTrDemo.png"  alt="Bild - dritter Schritt zum Erstellen eines Trainingsplans">
        </div>
      </div>
</section> 
 

<section class="bmi">  
<div class="text-intro"> 
<h2> Body Mass Index und Idealgewicht Rechner</h2>  

</div>

<iframe src="bmi.php" title="bmi" height="750px" width="505px"></iframe>
<iframe src="ideal-weight.php" title="bmi" height="750px" width="505px"></iframe>

</section> 

</main>



    <footer> 

    <h3 id="contact">Kontaktiere mich</h3> 

      <form action="" method="POST">
        <input name="firstname" type = "text" placeholder="Vorname" required>  
        <input name ="lastname" type = "text" placeholder="Name" required> 
        <input name ="email-contact" type = "email" placeholder="E-Mail-Adresse" required> 
        <textarea name="message-content" placeholder="Deine Nachricht an mich" minlength="10" required></textarea>
        <button name ="submit-contact" type="submit">Abschicken</button>
      </form>
      <div id="line"></div>
      <div id="copyright-icons">
        <div id="copyright">
                    <span>Copyright © 2021 plane-dein-training.de Alle Rechte <u>nicht</u> vorbehalten.</span>
        </div>
        <div id="icons"> 
          <a href="https://github.com/Leminee/plane-dein-training.de" target="_blank" alt="Github Icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  
            class="navbar-nav-svg" viewBox="0 0 512 499.36" role="img"><title>GitHub</title><path fill="currentColor" fill-rule="evenodd" d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z"></path></svg></a>
            <a href="https://discord.gg/4YwafTCKGh" target="_blank" alt="Discord Icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
  <path d="M6.552 6.712c-.456 0-.816.4-.816.888s.368.888.816.888c.456 0 .816-.4.816-.888.008-.488-.36-.888-.816-.888zm2.92 0c-.456 0-.816.4-.816.888s.368.888.816.888c.456 0 .816-.4.816-.888s-.36-.888-.816-.888z"/>
  <path d="M13.36 0H2.64C1.736 0 1 .736 1 1.648v10.816c0 .912.736 1.648 1.64 1.648h9.072l-.424-1.48 1.024.952.968.896L15 16V1.648C15 .736 14.264 0 13.36 0zm-3.088 10.448s-.288-.344-.528-.648c1.048-.296 1.448-.952 1.448-.952-.328.216-.64.368-.92.472-.4.168-.784.28-1.16.344a5.604 5.604 0 0 1-2.072-.008 6.716 6.716 0 0 1-1.176-.344 4.688 4.688 0 0 1-.584-.272c-.024-.016-.048-.024-.072-.04-.016-.008-.024-.016-.032-.024-.144-.08-.224-.136-.224-.136s.384.64 1.4.944c-.24.304-.536.664-.536.664-1.768-.056-2.44-1.216-2.44-1.216 0-2.576 1.152-4.664 1.152-4.664 1.152-.864 2.248-.84 2.248-.84l.08.096c-1.44.416-2.104 1.048-2.104 1.048s.176-.096.472-.232c.856-.376 1.536-.48 1.816-.504.048-.008.088-.016.136-.016a6.521 6.521 0 0 1 4.024.752s-.632-.6-1.992-1.016l.112-.128s1.096-.024 2.248.84c0 0 1.152 2.088 1.152 4.664 0 0-.68 1.16-2.448 1.216z"/>
</svg></a>
        

        </div>
      </div>

    </footer> 




  </body>   





</html>
