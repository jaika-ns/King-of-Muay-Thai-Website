<?php
require_once 'config.php'; // Adjust the path as necessary
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/visa-styles.css">
  <link rel="stylesheet" href="styles/footer-styles.css">
  <script src="https://kit.fontawesome.com/4752ef04f7.js" crossorigin="anonymous"></script>
  
  <title>Visa</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(function(){
      $('#header').load('header-1.php');
      $('#footer').load('footer.html');
    });
  </script>

</head>

<body>
  <div id="header"></div>
  <main>
  <div id="main">
      <div class="types-cnt">
        <div class="col">
          <div class="row">
            <h2 id="visa-title">Train Muay Thai and Secure Your 5-Year Thailand DTV Visa Today</h2>
          </div>
          <div class="row">
            <h2 id="visa-title-desc">Exclusive Muay Thai packages designed to help you stay in Thailand long-term</h2>
          </div>
          <div class="row">
            <h2 id="visa-dyk">Did you know?</h2>
          </div>
          <div class="row">
            <div class="col-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" fill="black" fill-opacity="0.15"/>
                <path d="M17 9L9.99998 16L6.99994 13M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="col-2">
              <h2 id="visa-check">100% of our students who applied for a Muay Thai visa successfully obtained their 5-year visa within just a few days.</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" fill="black" fill-opacity="0.15"/>
                <path d="M17 9L9.99998 16L6.99994 13M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="col-2">
              <h2 id="visa-check">Muay Thai training in Thailand is recognized by the government as an approved path to obtaining a 5-year DTV visa.</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" fill="black" fill-opacity="0.15"/>
                <path d="M17 9L9.99998 16L6.99994 13M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="col-2">
              <h2 id="visa-check">You can explore Thailand's beauty, train in authentic Muay Thai, and enjoy visa security for up to 5 years with just one package.</h2>
            </div>
          </div>
          <div class="row">
            <h2 id="visa-claim">
              *While we provide full support and guidance throughout the visa application process, the approval and granting of the 5-year visa under the Destination Thailand Visa scheme are solely at the discretion of the Thai government and immigration authorities. We cannot guarantee visa approval, but we will assist you in meeting the requirements and submitting the necessary documents.
            </h2>
          </div>
        </div>
        <div class="col">
          <div class="row">
            <h2 id="visa-fill">
              Fill out the form below, and our team will help you get started with your Muay Thai training package and guide you through the visa process.
            </h2>
          </div>
            <form class="training-form" method="post" action="code.php">
              <div class="row">
                <div class="col">
                  <input type="text" name="first_name" placeholder="First Name *" required>
                </div>
                <div class="col">
                    <input type="text" name="last_name" placeholder="Last Name *" required>
                </div>
              </div>
              <div class="row">
                <input type="email" name="email" placeholder="Email Address *" required>
              </div>
              <div class="row">
                <input id="phone" type="tel" name="phone_number" placeholder="Phone Number *" required>
              </div>
              <div class="row">
                <input id="country" name="countr" placeholder="Country *" required>
              </div>
              <div class="row">
                  <input type="text" name="date" placeholder="Preferred Start Date *" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'">
              </div>
              <div class="row-3">
                <select name="package_interest" required>
                  <option value="" disabled selected>Training Package Interest *</option>
                  <option value="6-Month-Group">6-Month Group Classes</option>
                  <option value="6-Month-Private">6-Month Private Classes</option>
                  <option value="12-Month-Group">12-Month Group Classes</option>
                  <option value="12-Private-Group">12-Month Private Classes</option>
                </select>
              </div>
              <div class="row">
                <button type="submit">Submit</button>
              </div>
            </form>
        </div>
      </div>
    </div>    
    <div class="stats-container">
      <div class="stat">
        <h1><span class="count" data-target="4000">0</span>+</h1>
        <p>Members Trained</p>
      </div>
      <div class="stat">
        <h1><span class="count" data-target="32000">0</span>+</h1>
        <p>Lessons Given</p>
      </div>
      <div class="stat">
        <h1><span class="count" data-target="40">0</span></h1>
        <p>Years of Experience</p>
      </div>
      <div class="stat">
        <h1><span class="count" data-target="120">0</span>+</h1>
        <p>Success Stories</p>
      </div>
      <div class="stat">
        <h1><span class="count" data-target="99">0</span>%</h1>
        <p>Satisfaction Rate</p>
      </div>
    </div>
    <div id="main-2">
      <div class="types-cnt">
        <div class="col">
          <div class="row">
            <h2 id="visa-title">QUESTIONS OR CONCERNS? WE’VE GOT YOU COVERED!</h2>
          </div>
          <div class="row">
            <h2 id="visa-title-desc">You may be wondering:</h2>
          </div>
          <div class="row">
            <h2 id="visa-dyk">Is the visa process complicated?</h2>
          </div>
          <div class="row">
              <h2 id="visa-check">The visa process is actually quite simple, and we're there to help you along the way. We have successfully helped many students secure their 5-year visas without hassle.</h2>
          </div>
          <div class="row">
            <h2 id="visa-dyk">Will I be able to handle Muay Thai training?</h2>
          </div>
          <div class="row">
              <h2 id="visa-check">Whether you're a beginner or experienced, our Muay Thai packages are tailored to your fitness level. Our expert trainers ensure you progress at your own pace, so you can enjoy the training and stay motivated.</h2>
          </div>
          <div class="row">
            <h2 id="visa-dyk">What if I can’t commit to a long training period?</h2>
          </div>
          <div class="row">
              <h2 id="visa-check">We offer training packages starting from 6 months, and we can customize a plan that works with your schedule. You’ll still qualify for the 5-year visa with a minimum commitment!</h2>
          </div>
        </div>
        <div class="col">
          <img src="images/visa-pic.png" id="visa-pic" alt="visa-pic">
        </div>
      </div>
    </div> 
    <section class="slanted-section">
      <div class="content">
        <h2>MEET OUR TRAINERS</h2>
          <div class="slanted-section-img">
            <img src="images/1.webp" alt="Trainer 1">
            <img src="images/2.webp" alt="Trainer 2">
            <img src="images/3.webp" alt="Trainer 3">
            <img src="images/4.webp" alt="Trainer 4">
            <img src="images/5.webp" alt="Trainer 5">
          </div>
          <div class="row">
            <button class="book-now" type="button">Book Now!</button>
          </div>
        </div>
      </div>
  </main>
    </section>
    <script src="form-submit.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
      // Phone Input Initialization
      const phoneInput = document.querySelector("#phone");
      const iti = window.intlTelInput(phoneInput, {
          initialCountry: "th", 
          separateDialCode: true, 
          utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js", 
      });

      // Add padding for country flags dynamically
      phoneInput.addEventListener("input", function () {
          const countryCode = iti.getSelectedCountryData().dialCode;
          const flagWidth = iti.selectedCountryData.iso2.length * 2 + 60; 
          phoneInput.style.paddingLeft = `${flagWidth}px`;
      });

      // Form Submission - Concatenate Phone Code and Number
      const form = document.querySelector(".training-form");

      form.addEventListener("submit", function (e) {
          e.preventDefault(); // Prevent the default form submission

          // Get the selected phone country code and user input
          const countryCode = iti.getSelectedCountryData().dialCode;
          const fullPhoneNumber = `+${countryCode}${phoneInput.value.trim()}`;

          // Create a hidden input field with the concatenated phone number
          const phoneHiddenInput = document.createElement("input");
          phoneHiddenInput.type = "hidden";
          phoneHiddenInput.name = "phone_number";
          phoneHiddenInput.value = fullPhoneNumber;

          // Append hidden input to the form and remove visible phone input name
          form.appendChild(phoneHiddenInput);
          phoneInput.removeAttribute("name");

          // Submit the form
          form.submit();
      });

      // Counter Animation
      const counters = document.querySelectorAll('.count');
      counters.forEach(counter => {
          const target = +counter.getAttribute('data-target'); 
          const duration = 2000; 
          const increment = target / (duration / 16); 
          let current = 0;

          const updateCounter = () => {
              current += increment;
              if (current < target) {
                  counter.textContent = Math.floor(current);
                  requestAnimationFrame(updateCounter);
              } else {
                  counter.textContent = target; 
              }
          };

          updateCounter();
      });
  });
    </script>
    <div id="footer"></div>
</body>
</html>