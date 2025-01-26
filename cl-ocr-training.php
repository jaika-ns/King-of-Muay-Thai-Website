<?php
// Database configuration
$host = "localhost";       
$username = "root";        
$password = "";           
$dbname = "muay_thai_visa"; 

// Step 1: Establish connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Fetch session data from the database
$sql = "SELECT membership, category_title, price, payment, credit, renewal, validity 
        FROM membership_sessions
        WHERE ID BETWEEN 'S019' AND 'S022' ";
$result = $conn->query($sql);

// Step 3: Create a class for sessions
class Session {
    public $membership;
    public $categoryTitle;
    public $price;
    public $payment;
    public $credit;
    public $renewal;
    public $validity;

    public function __construct($membership, $categoryTitle, $price, $payment, $credit, $renewal, $validity) {
        $this->membership = $membership;
        $this->categoryTitle = $categoryTitle;
        $this->price = $price;
        $this->payment = $payment;
        $this->credit = $credit;
        $this->renewal = $renewal;
        $this->validity = $validity;
    }
    

    // Method to display session details
    public function displaySession($id) {
      $category = strtolower(str_replace(' ', '-', $this->membership)); // Create a slug-like category
      echo "<div class='session-card' data-category='{$category}' data-id='{$id}'>";
      
      echo "<h2>{$this->categoryTitle}</h2>";
      echo "<p class='price'>&#3647;{$this->price}</p>";
          
      echo "
      <div class='inner-card'>
        <div class='inner-row'>
          <img src='icons/payment.png'>
          <p>{$this->payment}</p>
        </div>
        <div class='inner-row'>
          <img src='icons/class-credit.png'>
          <p>{$this->credit}</p>
        </div>
        <div class='inner-row'>
          <img src='icons/renew.png'>
          <p>{$this->renewal}</p>
        </div>
        <div class='inner-row'>
          <img src='icons/valid.png'>
          <p>{$this->validity}</p>
        </div>
      </div>  
      
      <a href='#'><button>Buy Now</button></a>
      ";
      echo "</div>";
  }

}

// Step 4: Store fetched data into objects
$sessions = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $sessions[] = new Session(
            $row['membership'],
            $row['category_title'],
            $row['price'],
            $row['payment'],
            $row['credit'],
            $row['renewal'],
            $row['validity']
        );
    }
} else {
    echo "No sessions found.";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/classes-1-styles.css">
  <link rel="stylesheet" href="styles/footer-styles.css">
  
  <title>Classes - OCR Training</title>
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

  <script src="scripts/cl-ocr-training.js"></script>

</head>

<body>
  <div id="header"></div>
  <div id="main-class">
  
  <div class="directory"><a class="class-link" href="classes.php">Classes</a> > <span class="bold">OCR Training</span></div>
  <p class="title">OCR Training</p>

  <div class="categories">
    <p class="all">All</p>
    <p>10 Sessions</p>
    <p>8 Sessions</p>
  </div>

  <div class="session-container">
      <?php
      // Display each session dynamically
      $id_counter = 19; // Starting from S019

      foreach ($sessions as $session) {
          $session_id = "S" . str_pad($id_counter, 3, '0', STR_PAD_LEFT); // Ensures S007, S008, ..., S011
          $session->displaySession($session_id);
          $id_counter++;
      }

      ?>
  </div>
  </div>
  <div id="footer"></div>

</body>
</html>