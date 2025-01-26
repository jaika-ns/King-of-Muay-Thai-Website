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
    <link rel ="stylesheet" href="styles/contact_us-styles.css">
    <link rel="stylesheet" href="styles/footer-styles.css"> 
    <script src="https://kit.fontawesome.com/4752ef04f7.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4752ef04f7.js" crossorigin="anonymous"></script>
    
    <title>King of Muay Thai</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function(){
        // Load header dynamically
        $('#header').load('header-1.php');
        // Load footer dynamically
        $('#footer').load('footer.html');
        });
    </script>
  </head>
<body>
  <div id="header"></div>
  <main>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fa-solid fa-location-dot fa-sm"></i>
          <div class="topic"><a href="https://www.google.com/maps?q=12.5535731,99.95493479999999">Address</a></div>
          <div class="text-one"><a href="https://www.google.com/maps?q=12.5535731,99.95493479999999">31/687 soi tang rodfai tawan tok, Hua Hin, Prachuap Khiri Khan 77110</a></div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+66 96 830 6514</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic"><a href="mailto:info@kingofmuaythaigym.com">Email</a></div>
          <div class="text-one"><a href="mailto:info@kingofmuaythaigym.com">info@kingofmuaythaigym.com</a></div>

        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Contact us</div>
        <p style="font-size: 12pt;">We're here to assist you! You may also reach out to us via the form below for more assistance.</p>
      <form action="process_message.php" method="POST" onsubmit="handleFormSubmission(event)">
        <div class="input-box">
          <input type="text" id="name" name="name" placeholder="Enter your name"required>
        </div>
        <div class="input-box">
          <input type="text" id="email" name="email" placeholder="Enter your email"required>
        </div>
        
        <div class="input-box message-box">
          <textarea type="text" id="message" name="message" placeholder="Enter your message" required></textarea>
        </div>


        <div class="button">
          <input type="submit" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
  </main>
  <script>
    function handleFormSubmission(event) {
      event.preventDefault(); // Prevent the default form submission
    
      // Show the alert and wait for the user to click "OK"
      alert("Your message has been sent successfully!");
    
      // Redirect to the homepage after the user clicks OK
      window.location.href = "home.php"; // Change 'home.html' to your actual homepage path
    }
    </script>
  <div id="footer"></div>
</body>
</html>