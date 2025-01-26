<?php
require_once 'config.php'; // Adjust the path as necessary
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="styles/styles.css">
    <link rel ="stylesheet" href="styles/home-styles.css">
    <link rel="stylesheet" href="styles/footer-styles.css"> 
    <link rel="stylesheet" href="styles/header-styles.css">
    <script src="https://kit.fontawesome.com/4752ef04f7.js" crossorigin="anonymous"></script>
  
    <link rel="icon" type="image/png" href="images/KMT_Logo.png">
    <link rel="icon" type="image/x-icon" href="images/KMT_Logo.ico">
    <link rel="shortcut icon" href="images/KMT_Logo.ico">
    
    <!-- For Apple devices -->
    <link rel="apple-touch-icon" href="images/KMT_Logo.png">
    
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
  <div class="home_container">
    <div class="home_img">
            <div class="home">
                <h1>THE FIGHT ISN'T OVER<br>
                    UNTIL YOU SAY IT IS</h1>
                <h4>Group training sessions only ฿299 <br>
                Experience expert-led sessions designed for all skill levels</h4> <br><br>
                <a href="http://localhost/code/ICS2609/Final_Project/Public/Team/classes.php" class="Session">Book A Session Now</a>
            </div>
    </div>
</div>

    <div class="home_classes_container">
    <div class="home_classes">
    <h1 style="font-size: 1.8rem;">Dynamic Group Workouts for All Levels</h1><br><br><br><br>
    <h4 style="font-weight: normal;">Experience our dynamic group workouts designed to cater to diverse fitness enthusiasts. 
        Whether you’re honing your Muay Thai skills or tackling our specialized OCR training, 
        our expert-led sessions offer the perfect blend of challenge and support. Boost your fitness, 
        master new techniques, and achieve your goals with us!
    </h4>

        <a style="background-color: #18192E; color: #F9F9F9" href="#" class="Classes">See All Classes</a>
        <a href="#" class="Session">Book A Class</a>

        </div>
    </div>

    <div class="wrapper">
        <div class="card">
            <img src="images/ocr.jpg">
            <div class="info">
                <h1> OCR Training</h1>
                <p>
                    Boost your strength, endurance, and agility with our Obstacle Course Racing Training! 
                    Led by experienced trainers, each session blends functional exercises, obstacle navigation, 
                    and conditioning to help you excel. 
                    Perfect for beginners and seasoned racers alike, 
                    it's the ideal environment to push limits and achieve your goals.
                </p>
                <a href="#" class="btn">View More</a>
            </div>
        </div>
        <div class="card">
            <img src="images/child class.jpg">
            <div class="info">
                <h1> Kids Muay Thai Group Class</h1>
                <p>
                    Our Kids Muay Thai class offers a fun, engaging way to learn the fundamentals of Muay Thai. 
                    Guided by professional trainers, kids will build confidence, 
                    discipline, and fitness in a safe and supportive environment
                </p>
                <a href="#" class="btn">View More</a>
            </div>
        </div>
        <div class="card">
            <img src="images/group class.jpg">
            <div class="info">
                <h1> Muay Thai Group Class</h1>
                <p> 
                    Experience 2-hour Muay Thai group sessions for all skill levels! 
                    Train with professional coaches, boost your fitness, sharpen techniques, 
                    and connect in a fun, supportive environment.
                </p>
                <a href="#" class="btn">View More</a>
            </div>
        </div>
    </div>

<div class="home_classes_container">
    <div class="home_classes">
    <h1 style="font-size: 1.8rem;">Located in the Heart of Hua Hin</h1><br><br><br><br>
    <h4 style="font-weight: normal;">Find us in the heart of Hua Hin, just minutes away from popular restaurants, hotels, and attractions. 
        Our convenient location makes it easy to combine your Muay Thai training with everything the city has to offer. 
        Visit us and start your journey today!</h4>
        <a style="background-color: #18192E; color: #F9F9F9" href="https://www.google.com/maps?q=12.5535731,99.95493479999999" class="Classes">Locate Us</a>
    </div>    
</div>
<div class="location_container">
    <div class="card" id="location_img">
        <img src = "images/gym.png">
        <div class="info" id="location_info">
        <h1 style="font-size: 30px;">
        King of Muay Thai
        </h1>
       <p style="font-size: 18px;"> 
        <i class="fa-solid fa-location-dot fa-sm"></i> Soi 94, Tambon Hua Hin, 77110, Amphoe Hua Hin
        </p>
        <p style="font-size: 18px;">
            <i class="fa-solid fa-phone fa-sm"></i> +66 96 830 6514
        </p>
        <p style="font-size: 18px;"> 
        <i class="fa-solid fa-envelope fa-sm"></i> info@kingofmuaythaigym.com
        </p> 
    </div>
</div>
</div>

<div class="home_classes"> <h1 style="margin-top: 0px; font-size: 1.8rem;">Ameneties And Facilities</h1></div>
<div class="ameneties_container">
    <div class="ameneties"><i class="fa-solid fa-shower fa-xl"> Showers</i></div>
    <div class="ameneties"><i style="font-weight: bold;" class="fa-regular fa-snowflake fa-xl"> Ice Bath</i></div>
    <div class="ameneties"><i class="fa-solid fa-lock fa-xl"> Lockers</i></div>
    <div class="ameneties"><i class="fa-solid fa-dumbbell fa-xl"> Gym</i></div>
    <div class="ameneties"><i class="fa-solid fa-temperature-three-quarters fa-xl"> Sauna</i></div>
    <div class="ameneties"><i class="fa-solid fa-heart-circle-bolt fa-xl"> Cardio Machines</i></div>
</div>

<div id="horizontal"></div>

<div style="margin-top: 30px;" class="wrapper">
    <div class="card">
        <img src="images/course.jpg">
        <div class="info">
            <h1> Spartan Training Zone</h1>
            <p>
                Welcome to our Spartan Training Zone—built for those gearing up for obstacle 
                course races like Spartan. Featuring challenging obstacles, 
                it’s the ultimate space to build strength, endurance, and agility. 
                Train hard, push your limits, and conquer any race!
            </p>
            
        </div>
    </div>
    <div class="card">
        <img src="images/facilities.jpg">
        <div class="info">
            <h1> Fitness Center</h1>
            <p>
                Our Fitness Center features top-of-the-line cardio machines and 
                weightlifting equipment to support your strength and conditioning goals. 
                Whether you're building muscle or boosting endurance, 
                you'll find everything you need for a full, effective workout.
            </p>
            
        </div>
    </div>
    <div class="card">
        <img src="images/ring.jpg">
        <div class="info">
            <h1> Boxing Arena</h1>
            <p> 
                Our Boxing Arena is the heart of King of Muay Thai gym, offering an authentic space to sharpen your skills. 
                Featuring a professional-grade ring and top-notch training equipment, 
                it’s the ideal environment to push your limits and master your technique.
            </p>
            
        </div>
    </div>
</div>
<div id="footer"></div>
</body>
</html>