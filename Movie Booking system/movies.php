<?php
session_start();


if(isset($_SESSION['valid'])) {
    $loggedIn = true;
} else {
    $loggedIn = false;
}


if($loggedIn && isset($_GET['action']) && $_GET['action'] === 'account') {
    header("Location: profile.php");
    exit;
}


if(!$loggedIn && isset($_GET['action']) && $_GET['action'] === 'account') {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flix com</title>
  <link rel="stylesheet" href="movies.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
  <header class="header">
    <div class="container-header">
      <div class="logo">FlixCom</div>
      <button type="button" class="menu-btn">
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>
      
      <nav class="menu">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="upcoming.php">Upcoming</a></li>
          <li><a href="#">News</a></li>
          <li><a href="?action=account">Account</a></li>       
        </ul>
      </nav>
    </div>

  </header>

<main>
  <section class="Movies" id="Movies">
    <div class="movies-container">
      <div class="box">
      <div class="box-img">
        <img src="Images/the.jpeg" alt="img">
      </div> 
      <h3>Theory of everything</h3>
      <span>150 min | Drama</span>  
    </div>
    <div class="box">
      <div class="box-img">
        <img src="Images/bla.jpeg" alt="img">
      </div> 
      <h3>Blade Runner 2049</h3>
      <span>170 min | Future</span>  
    </div>
    <div class="box">
      <div class="box-img">
        <img src="Images/ju.jpeg" alt="img">
      </div> 
      <h3>The Judge</h3>
      <span>120 min | Drama</span>  
    </div>
    <div class="box">
      <div class="box-img">
        <img src="Images/ki.jpeg" alt="img">
      </div> 
      <h3>Killers of the flower moon</h3>
      <span>150 min | Drama</span>  
    </div>
    <div class="box">
      <div class="box-img">
        <img src="Images/mid.jpeg" alt="img">
      </div> 
      <h3>Midsommar</h3>
      <span>140 min | Horror</span>  
    </div>
    <div class="box">
      <div class="box-img">
        <img src="Images/ten.jpeg" alt="img">
      </div> 
      <h3>Tenet</h3>
      <span>180 min | Fiction</span>  
    </div>
    <div class="box">
      <div class="box-img">
        <img src="Images/on.jpg" alt="img">
      </div> 
      <h3>Once upon a time in <br>hollywood</h3>
      <span>160 min | Drama</span>  
    </div>
    <div class="box">
      <div class="box-img">
        <img src="Images/fif.jpeg" alt="img">
      </div> 
      <h3>Fifty Shades of grey</h3>
      <span>120 min | Romance</span>  
    </div>
    </div>
  </section>
</main>


  <footer class="footer">
    <div class="container">
     <div class="row">
      <div class="footer-col">
        <h4>Site</h4>
        <ul>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Get Help</h4>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Send Mail</a></li>
          <li><a href="#">Agent</a></li>
          <li><a href="#">Message</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>FlixCom</h4>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="upcoming.php">Coming Soon</a></li>
          <li><a href="#">News</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Follow Us</h4>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div> 
  <button onclick="scrollToTop()" style="position: fixed; bottom: 20px; right: 20px; background-color: #000000; color: #fff; border: none; border-radius: 10px; padding: 10px 15px; cursor: pointer; z-index: 999; font-family: poppins, sans-serif;" class="go-top-btn">Top</button>

</footer>
<script>
    function scrollToTop() 
    {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
</script>


</body>
</html>
