<?php
// First: Set session parameters BEFORE starting the session
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 86400);

// Then: Start the session
session_start();

// Debug settings
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Debug session info
echo "<!-- Session Debug: ";
var_dump($_SESSION);
echo " -->";

// Check session status
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<header class="header">
    <nav class="nav_container">
        <div class="nav_data">
            <div class="logo">
                <a href="#" class="nav_logo">
                    <img src="images/KMT_Logo.png" alt="Logo">
                </a>
            </div>
            <div class="nav_menu">
                <a href="home.php" class="Home">Home</a>
                <a href="classes.php" class="Classes">Classes</a>
                <a href="team.php" class="Team">Team</a>
                <a href="visa.php" class="Visa">Visa</a>
                <a href="contact_us.php" class="Contact">Contact us</a>
                <a href="developers.php" class="Contact">Developers</a>
            </div>
            <div class="Login">
                <div class="user-profile" style="display: none;">
                    <img src="images/profile-circle.svg" alt="Profile" class="profile-icon">
                    <a href="logout.php" class="logout-btn">Logout</a>
                </div>
                <a href="#" class="open-login Login-btn">Log in / Sign up</a>
            </div>
            <div class="menu">
                <a href="#"><img src="images/menu.png" alt="Menu"></a>
            </div>
        </div>
    </nav>
</header>

<!-- Dropdown Menu -->
<ul class="dropdown">
    <li class="user-profile-menu" style="display: none;">
        <a href="#" class="logout-btn">Logout</a>
    </li>
    <li class="login-menu-item"><a href="#" class="open-login">Log in / Sign up</a>
        <div class="user-profile" style="display: none;">
            <img src="images/profile-circle.svg" alt="Profile" class="profile-icon">
            <a href="logout.php" class="logout-btn">Logout</a>
        </div></li>
    <li><a href="home.php">Home</a></li>
    <li><a href="classes.php">Classes</a></li>
    <li><a href="team.php">Team</a></li>
    <li><a href="visa.php">Visa</a></li>
    <li><a href="contact_us.php">Contact us</a></li>
    <li><a href="developers.php">Developers</a></li>
</ul>

<!-- Login Modal -->
<div id="loginModal" class="modal-background">
    <div class="modal-log">
        <div class="col-log-1">
            <img src="images/KMT_Logo.png" alt="Logo">
        </div>
        <div class="col-log-2">
            <span class="close-log">&times;</span>
            <div class="row">
                <h2>Login</h2>
            </div>
            <form action="login.php" id="loginForm" method="post">
                <div class="row-title">
                    <h2>Email Address</h2>
                </div>
                <div class="row">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="row-title">
                    <h2>Password</h2>
                </div>
                <div class="row">
                    <div class="password-container">
                        <input type="password" name="password" placeholder="Password" required>
                        <span class="show-password">
                            <img src="images/eye-closed.png" alt="Show password">
                        </span>
                    </div>
                </div>
            </form>
            <div class="row">
                <button>Login</button>
            </div>
            <div class="row-title">
                <h2>Don't have an account? <a href="#" id="openSignup">Sign Up</a></h2>
            </div>
        </div>
    </div>
</div>

<!-- Sign Up Modal -->
<div id="signupModal" class="modal-background">
    <div class="modal-log">
        <div class="col-log-1">
            <img src="images/KMT_Logo.png" alt="Logo">
        </div>
        <div class="col-log-2">
            <span class="close-log-1">&times;</span>
            <div class="row">
                <h2>Sign Up</h2>
            </div>
            <form id="signupForm">
                <div class="row">
                    <input type="email" id="signupEmail" placeholder="Email Address" required>
                </div>
                <input type="hidden" id="role" value="user"> <!-- Default role -->
                <div class="row">
                    <button type="submit" class="signup-btn">Sign Up</button>
                </div>
            </form>                
            <div class="row-title">
                <h2>Already have an account? <a href="#" id="openLogin">Login</a></h2>
            </div>
        </div>
    </div>
</div>

<!-- Password Modal -->
<div id="passwordModal" class="modal-background">
    <div class="modal-log">
        <div class="col-log-1">
            <img src="images/KMT_Logo.png" alt="Logo">
        </div>
        <div class="col-log-2">
            <span class="close-log-2">&times;</span>
            <div class="row">
                <h2>Create Password</h2>
            </div>
            <div class="row-title">
                <h2>Create your password for <strong id="displayEmail">example@gmail.com</strong>. This will be used for your future login.</h2>
            </div>
            <div class="row-title">
                <h2>Use at least 8 characters and a mix of letters, numbers and 1 special symbol.</h2>
            </div>
            <form id="createPasswordForm">
                <div class="row-title">
                    <h2>Password</h2>
                </div>
                <div class="row">
                    <div class="password-container">
                        <input type="password" id="newPassword" placeholder="Enter new password" required minlength="8">
                        <span class="show-password">
                            <img src="images/eye-closed.png" alt="Show password">
                        </span>
                    </div>
                </div>
                <div class="row-title">
                    <h2>Confirm Password</h2>
                </div>
                <div class="row">
                    <div class="password-container">
                        <input type="password" id="confirmPassword" placeholder="Confirm new password" required minlength="8">
                        <span class="show-password">
                            <img src="images/eye-closed.png" alt="Show password">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <button type="submit">Create Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    const dropdownMenu = document.querySelector('.dropdown');
    const menuIcon = document.querySelector('.menu');
    const closeBtns = document.querySelectorAll('.close-log');
    const closeBtns1 = document.querySelectorAll('.close-log-1');
    const closeBtns2 = document.querySelectorAll('.close-log-2');
    const modals = document.querySelectorAll('.modal-background');
    const loginModal = document.getElementById('loginModal');
    const signupModal = document.getElementById('signupModal');
    const passwordModal = document.getElementById('passwordModal');
    const signupEmail = document.getElementById('signupEmail');
    const displayEmail = document.getElementById('displayEmail');
    const openLoginBtns = document.querySelectorAll('.open-login');
    const openSignup = document.getElementById('openSignup');
    const openLogin = document.getElementById('openLogin');

    menuIcon.addEventListener('click', () => dropdownMenu.classList.toggle('show'));
    window.addEventListener('click', (e) => {
        if (!menuIcon.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.remove('show');
        }
    });

    openLoginBtns.forEach(btn => btn.addEventListener('click', () => loginModal.style.display = 'flex'));
    openSignup.addEventListener('click', () => {
        loginModal.style.display = 'none';
        signupModal.style.display = 'flex';
    });


    document.getElementById('signupForm').addEventListener('submit', (e) => {
        e.preventDefault();

        const email = document.getElementById('signupEmail').value;

        if (email) {
            // Send email to the server
            const formData = new FormData();
            formData.append('email', email);

            fetch('signup.php', {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    displayEmail.textContent = email; // Set email for password modal
                    signupModal.style.display = 'none'; // Close sign-up modal
                    passwordModal.style.display = 'flex'; // Open password creation modal
                } else {
                    alert(data.message || 'An error occurred while signing up.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to sign up. Please try again later.');
            });
        } else {
            alert('Please enter a valid email address.');
        }
    });



    document.querySelector('#loginModal button').addEventListener('click', (e) => {
        e.preventDefault();

        const email = document.querySelector('#loginModal input[type="email"]').value;
        const password = document.querySelector('#loginModal input[type="password"]').value;

        const formData = new FormData();
        formData.append('email', email);
        formData.append('password', password);

        fetch('login.php', {
            method: 'POST',
            body: formData,
            credentials: 'same-origin'
        })
        .then((response) => response.text())
        .then((data) => {
            console.log("Response from server:", data);

            const [status, message] = data.split('|'); 

            if (status === "success") {
                console.log("Login successful");
                
                // Close login modal
                const loginModal = document.getElementById('loginModal');
                loginModal.style.display = 'none';
                
                // Get all relevant elements
                const userProfile = document.querySelector('.user-profile');
                const loginButton = document.querySelector('.Login-btn');
                const userProfileMenu = document.querySelector('.user-profile-menu');
                const loginMenuItem = document.querySelector('.login-menu-item');
                const loginContainer = document.querySelector('.Login');
                
                // Log element states before changes
                console.log("User profile display before:", userProfile.style.display);
                console.log("Login button display before:", loginButton.style.display);
                
                // Show/hide elements
                userProfile.style.display = 'flex';
                loginButton.style.display = 'none';
                userProfileMenu.style.display = 'block';
                loginMenuItem.style.display = 'none';
                loginContainer.style.border = 'none';
                
                // Log element states after changes
                console.log("User profile display after:", userProfile.style.display);
                console.log("Login button display after:", loginButton.style.display);
                
                if (message === "admin") {
                    alert('Welcome, Admin. Login successful!');
                    window.location.href = 'admin.php';
                } else {
                    alert('Welcome, User. Login successful!');
                }
            } else if (status === "error") {
                alert(message);
            } else {
                alert('Unexpected response from the server.');
            }
        })
        .catch((error) => {
            console.error('Error:', error);
            alert('An error occurred while processing your request.');
        });
    });


    document.getElementById('createPasswordForm').addEventListener('submit', (e) => {
        e.preventDefault();
        const password = document.getElementById('newPassword').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const regex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        
        if (password !== confirmPassword) {
            alert('Passwords do not match. Please try again.');
        } else if (!regex.test(password)) {
            alert('Password must include letters, numbers, and a special symbol, and be 8+ characters.');
        } else {
            alert('Password successfully created!');
            window.location.href = 'home.php';
        }
    });

    // Close Login, Sign Up, and Password Modals
    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            loginModal.style.display = 'none';
        });
    });

    closeBtns1.forEach(btn => {
        btn.addEventListener('click', () => {
            signupModal.style.display = 'none';
        });
    });

    closeBtns2.forEach(btn => {
        btn.addEventListener('click', () => {
            passwordModal.style.display = 'none';
        });
    });

    // Add logout handler
    document.querySelectorAll('.logout-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            // Show login button, hide user profile
            document.querySelector('.user-profile').style.display = 'none';
            document.querySelector('.Login-btn').style.display = 'block';
            document.querySelector('.user-profile-menu').style.display = 'none';
            document.querySelector('.login-menu-item').style.display = 'block';
            
            // Add any additional logout logic (e.g., clearing session)
            window.location.href = 'home.php';
        });
    });

    document.querySelectorAll('.show-password').forEach(toggle => {
        toggle.addEventListener('click', function() {
            const passwordInput = this.previousElementSibling;
            const eyeIcon = this.querySelector('img');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.src = 'images/eye-open.png';
            } else {
                passwordInput.type = 'password';
                eyeIcon.src = 'images/eye-closed.png';
            }
        });
    });

</script>
</body>
</html>