<?php
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/classes-styles.css">
  <link rel="stylesheet" href="styles/developers-styles.css">
  
  <title>Developers</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(function(){
      $('#header').load('header-1.php');
    });
  </script>

  <script src="scripts/cl-private-lessons.js"></script>

</head>

<body>
  <div id="header"></div>
  <div id="main">

    <p class="title">Developers Page</p>

    <div class="team-container">
      <div class="team-card">
          <img src="images/team1.jpg">
      </div>

      <div class="description">
        <p class="about">About Us</p>

        <p>This web application is the Final Academic Project for the course ICS2609 – Applications Development
           and Emerging Technologies 2 (Enterprise Back-End). It was developed by 3rd Year Bachelor of Science in 
           Information Systems students from Section 3ISB:
          </p>

        <div class="indent">
          <p>1. Christian Daniel S. Angeles</p>
          <p>2. Jaika Ann Margarette N. Sangual</p>
          <p>3. Anne Gabrielle D. Uyehara</p>
        </div>
      
        <p>
           This project showcases their skills and knowledge in enterprise back-end development, web technologies, 
           and applications development. It reflects their collaborative effort, dedication, and creativity in building functional, 
           user-friendly, and innovative solutions.
        </p>  
      </div>
    </div>
  </div>

  <div class="solo-container">
    <p class="meet">Meet the Team!</p>
    
    <div class="solo-card">
      <div class="solo">
        <img src="images/jaika.jpg">
        <p class="name">Jaika</p>
        
      </div>
      <div class="solo">
        <img src="images/christian.jpg">
        <p class="name">Christian</p>
      </div>
      <div class="solo">
        <img src="images/keni.jpg">
        <p class="name">Anne</p>
      </div>
    </div>

  </div>

  
     
 

</body>
</html>