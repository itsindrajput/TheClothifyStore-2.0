<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome To The Clothify Store</title>  
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--Html css-->
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/welcome.css">
<!--Bootstrap css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
<!-- Java Script -->
<script src="javascript/login.js" async></script>

<!--Naviagation Bar-->
<nav class="navbar navbar-expand-lg navbar-dark" id="navbarstyle" style="background-color: rgb(0,128,128)">
    <div>
    <a class="navbar-brand" id="actives" href="index.php"><i class="fa fa-home"><b id="home"> Home</b></i></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
    <div class="btn-group" id="dropmenu">
    <button type="button" class="btn btn-light"><b class="me">Clothify Items</b></button>
    <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
    <a class="dropdown-item explore" href="Clothify4Men.php">Men's Fashion</a>
    <a class="dropdown-item explore" href="Clothify4Women.php">Clothing For Women</a>
    <a class="dropdown-item explore" href="Clothify4Kids.php">Best Kid's Clothing</a>
    <a class="dropdown-item explore" href="#">The Indian Fashion</a>
    <a class="dropdown-item explore" href="#">Italian Fashion Brands</a>
    <div class="dropdown-divider explore"></div>
    <a class="dropdown-item explore" href="index.php">Clothify Fashion House</a>
    </div>
    </div>
    </li>
    <li class="nav-item active">
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" id="home" placeholder="Search For Brands.." aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" id="actives" type="submit"><b id="home"> Search</b></button>
    </form>
    </li>
    </ul>
    <div>
    <a class="navbar-brand" id="actives" href="Add2Bag.php"><i class="fa fa-shopping-bag" aria-hidden="true"><b id="home"> Bag</b></i></a>
    <a class="navbar-brand" id="actives" href="Features.php" style="width: 7rem;"><i class="fa fa-calendar-plus" aria-hidden="true"><b id="home"> Features</b></i></a>
    <a class="navbar-brand" id="actives" href="login.php"><i class="fa fa-user-secret" aria-hidden="true"><b id="home">LogOut</b></i></a>
    </div>
    </div>
</nav>


<!-- Welcome Card Start Here-->
<div class="container welcome-container" style="padding-top: 1.5rem;">
  <div class="wrapper">
    <div class="card welcome-card active">
      <div class="welcome-wrapper" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 2rem;">
        
        <!-- Left Side: Carousel Card Images -->
        <div class="welcome-image" style="flex: 1; min-width: 300px;">
          <div class="card-carousel">
            <div class="card-carousel-track">
              <div class="card-carousel-item"><img src="img/blog-1.jpg" alt="Slide 1" /></div>
              <div class="card-carousel-item"><img src="img/blog-2.jpg" alt="Slide 2" /></div>
              <div class="card-carousel-item"><img src="img/blog-3.jpg" alt="Slide 3" /></div>
            </div>
          </div>
        </div>

        <!-- Right Side: Welcome Text -->
        <div class="welcome-text" style="flex: 1; min-width: 300px;">
          <h1 class="head1">Welcome 🎉 <?php echo $_SESSION['username']; ?>!</h1>
          <p class="welcome-subtitle">You’ve successfully joined the community.</p>
          <p class="welcome-message">We're thrilled to have you onboard. Start exploring amazing features crafted just for you!</p>
          <a href="logout.php" class="button color-1 logout-btn">Logout</a>
        </div>

      </div>

      <!-- Bottom Carousel -->
      <div class="carousel-container">
        <div class="carousel">
          <div class="carousel-slide active">🚀 Explore powerful features.</div>
          <div class="carousel-slide">🎯 Stay focused and achieve your goals.</div>
          <div class="carousel-slide">💡 Learn something new every day.</div>
          <div class="carousel-slide">🌍 Join a global learning community.</div>
        </div>
      </div>
    </div>
  </div>
</div>









<!--Footer start here-->
<footer class="footer">
    <div class="container">
    <div class="row">
    <div class="footer-col">
    <h4>Clothify</h4>
    <ul>
    <li><a href="index.php" id="address">Home</a></li>
    <li><a href="#" id="address">About</a></li>
    <li><a href="#" id="address">Pricing</a></li>
    <li><a href="#" id="address">Privacy Policy</a></li>
    </ul>
    </div>
    <div class="footer-col">
    <h4>Get Help</h4>
    <ul>
    <li><a href="#" id="address">Returns</a></li>
    <li><a href="#" id="address">Contact Us</a></li>
    <li><a href="#" id="address">Order Status</a></li>
    <li><a href="#" id="address">Payment Options</a></li>
    </ul>
    </div>
    <div class="footer-col">
    <h4 >Address</h4>
    <ul >
    <li><a href="#" id="address">6/3, P/3 Shastri Nagar<br>
    Agra, UP-
    282002<br>
    <a href="tel:8382023265" id="address"> <i class="fa fa-phone" aria-hidden="true"> Click To Call </i></a>
    <a href="mailto:theclothifystore@gmail.com" id="address"><i class="fa fa-envelope"> Send Email</i></a>
    </a></li>
    </ul>
    </div>
    <div class="footer-col">
    <h4>follow us</h4>
    <div class="social-links">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
    </div>
    </div>
    <div class="row justify-content-center">             
      <div class="col-auto">
          <legend class="copyright"> |The Clothify Store &copy 2021 Pvt Ltd &reg All Right Reserved.|<br />|View Our Tearms Of Use &amp; Privacy Policy.|</legend> 
      </div>
      </div>
    </div>
    </footer>
            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>