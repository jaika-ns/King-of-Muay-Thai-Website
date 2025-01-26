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
  <link rel="stylesheet" href="styles/team-styles.css">
  <link rel="stylesheet" href="styles/footer-styles.css"> 
  <script src="https://kit.fontawesome.com/4752ef04f7.js" crossorigin="anonymous"></script>
  
  <title>Team</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css">
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

  <div id="main">
    <div class="title">
      <div class="title-text">Meet our Team!</div>
    </div>
    <div class="types-cnt">
      <div class="type-box">
        <img src="images/Trainer_1.webp" alt="Logo">
        <div class="overlay">
          <span>Meaw Suwanakit</span>
          <p>Trainer</p>
          <a href="#" class="read-more">Read More</a>
        </div>
      </div>
      <div class="type-box">
        <img src="images/Trainer_2.webp" alt="Logo">
        <div class="overlay">
          <span>Aun Sarawut</span>
          <p>Trainer</p>
          <a href="#" class="read-more">Read More</a>
        </div>
      </div>
      <div class="type-box">
        <img src="images/Trainer_3.webp" alt="Logo">
        <div class="overlay">
          <span>Bas Chalbun</span>
          <p>Trainer</p>
          <a href="#" class="read-more">Read More</a>
        </div>
      </div>
      <div class="type-box">
        <img src="images/Trainer_4.webp" alt="Logo">
        <div class="overlay">
          <span>Nut Raiyawong</span>
          <p>Trainer</p>
          <a href="#" class="read-more">Read More</a>
        </div>
      </div>
      <div class="type-box">
        <img src="images/Trainer_5.webp" alt="Logo">
        <div class="overlay">
          <span>IQ Thani</span>
          <p>Trainer</p>
          <a href="#" class="read-more">Read More</a>
        </div>
      </div>
      <!-- Modal Structure -->
      <div id="modal" class="modal">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h2 id="modal-header-title"></h2>
            <h3 id="modal-header-desc">Trainer</h3>
            <div class="nav-arrows">
              <span class="arrow left-arrow" id="left-arrow">&#10094;</span>
              <span class="arrow right-arrow" id="right-arrow">&#10095;</span>
            </div>
          </div>
          <!-- Close Button -->
          <span class="close">&times;</span>
          
          <!-- Trainer Information -->
          <div class="modal-body">
            <div class="col-1">
              <img id="modal-image" alt="Logo">
            </div>
            <div class="col-2">
              <div class="row">
                <h2 id="modal-Title-Row">Skilled In</h2>
              </div>
              <div class="row">
                <h2 id="modal-Skilled-Desc"></h2>
              </div>
              <div class="row">
                <h2 id="modal-Title-Row">Bio</h2>
              </div>
              <div class="row">
                <h2 id="modal-Bio-Title"></h2>
              </div>
              <div class="row">
                <h2 id="modal-Bio-Desc"></h2>
              </div>
              <div class="row">
                <h2 id="modal-Bio-Join">
                  Join us and benefit from Meaw’s expertise and commitment to Muay Thai!
                </h2>
              </div>
              <div class="row">
                <a href="#" class="book-now">Book Now</a>
              </div>
            </div>
          </div>
        
        </div>
      </div>

    </div>    
  </div>
  <div id="footer"></div>
  <script>
    // Modal Logic
    const modal = document.getElementById("modal");
    const modalTitle = document.getElementById("modal-title");
    const modalHeaderTitle = document.getElementById("modal-header-title");
    const modalSkill = document.getElementById("modal-Skilled-Desc");
    const modalHeaderDesc = document.getElementById("modal-header-desc");
    const modalImage = document.getElementById("modal-image");
    const modalBioTitle = document.getElementById("modal-Bio-Title");
    const modalBioDesc = document.getElementById("modal-Bio-Desc");
    const closeBtn = document.querySelector(".close");
    const leftArrow = document.getElementById("left-arrow");
    const rightArrow = document.getElementById("right-arrow");
  
    // Trainer data
    const trainers = [
      {
        name: "Meaw Suwanakit",
        skill: "Muay Thai",
        title: "Meet Our Head Coach: Meaw",
        description: "We’re proud to introduce Meaw, our dedicated Head Coach who has been an integral part of our gym for nearly two years. Meaw’s journey in Muay Thai began at the age of 6, and he has since accumulated an impressive record of nearly 200 fights, with 150 victories to his name. His extensive experience and deep passion for the sport make him an exceptional mentor and coach. Outside the ring, Meaw is happily married to Cam, and they have a wonderful son named Ben.",
        image: "images/Trainer_1.webp"
      },
      {
        name: "Aun Sarawut",
        skill: "Muay Thai",
        title: "Meet Aun: ",
        description: "Aun’s journey in Muay Thai began at the age of 6, and he has since built an impressive career with over 150 fights, securing approximately 120 victories. His extensive experience in Muay Thai is complemented by his specialization in Western boxing, showcasing his diverse skill set and depth in combat sports.",
        image: "images/Trainer_2.webp"
      },
      {
        name: "Bas Chalbun",
        skill: "Muay Thai",
        title: "Meet Bas: Our Youngest Trainer with a Passion for Muay Thai",
        description: "Bas is the youngest trainer at our gym, and his dedication and passion for Muay Thai are truly admirable. Starting his journey in Muay Thai at a young age, Bas has grown into one of our active fighters, bringing both enthusiasm and skill to every session. Known for his jolly demeanor and patient approach, Bas excels in creating a positive and supportive training environment for all.",
        image: "images/Trainer_3.webp"
      },
      {
        name: "Nut Raiyawong",
        skill: "Muay Thai & Western Boxing",
        title: "Introducing Tum: Experienced Muay Thai Trainer and Western Boxing Specialist",
        description: "Tum brings a wealth of experience to our gym, having been deeply involved in the Muay Thai industry for many years. His expertise extends beyond our borders, with a background as a trainer in countries like China. In addition to being an active fighter, Tum is highly skilled in both Muay Thai and Western Boxing. His exceptional teaching abilities make him an invaluable asset to our team, offering top-notch instruction in both disciplines.",
        image: "images/Trainer_4.webp"
      },
      {
        name: "IQ Thani",
        skill: "Muay Thai",
        title: "Meet IQ (Q): Experienced Muay Thai Trainer and Kid-Friendly Instructor",
        description: "IQ, also known as Q, has been a valued member of our gym for quite some time. With a strong background in Muay Thai, having started at a young age and accumulated over 150 fights, Q brings extensive experience to his training sessions. In addition to his impressive fight record, Q is fluent in English and excels in working with kids, making him an excellent choice for families looking to introduce their children to Muay Thai.",
        image: "images/Trainer_5.webp"
      }
    ];
  
    let currentIndex = 0;
  
    function updateModal(index) {
      const trainer = trainers[index];
      modalHeaderTitle.textContent = trainer.name; 
      modalSkill.textContent = trainer.skill;
      modalBioTitle.textContent = trainer.title;
      modalBioDesc.textContent = trainer.description;
      modalImage.src = trainer.image;
    }
  
    // Open modal when clicking "Read More"
    const readMoreButtons = document.querySelectorAll(".read-more");
    readMoreButtons.forEach((button, index) => {
      button.addEventListener("click", (e) => {
        e.preventDefault();
        currentIndex = index;
        updateModal(currentIndex);
        modal.style.display = "flex";
      });
    });
  
    // Close modal
    closeBtn.addEventListener("click", () => {
      modal.style.display = "none";
    });
  
    // Close modal when clicking outside
    window.addEventListener("click", (event) => {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    });
  
    // Navigation Arrows
    leftArrow.addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + trainers.length) % trainers.length; // Loop back
      updateModal(currentIndex);
    });
  
    rightArrow.addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % trainers.length; // Loop forward
      updateModal(currentIndex);
    });
  </script>
  
  
</body>
</html>