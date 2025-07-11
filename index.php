<!DOCTYPE html>
<html lang="en">
<head>
<title>The Clothify Store | Home Page |</title>  
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--Html css-->
<link rel="stylesheet" type="text/css" href="css/index.css">
<!--Bootstrap css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


<script type = "text/javascript">
  function displayNextImage() {
      x = (x === images.length - 1) ? 0 : x + 1;
      document.getElementById("img").src = images[x];
  }

  function displayPreviousImage() {
      x = (x <= 0) ? images.length - 1 : x - 1;
      document.getElementById("img").src = images[x];
  }

  function startTimer() {
      setInterval(displayNextImage, 10000);
  }

  var images = [], x = -1;
  images[0] = "img/blog-2.jpg";
  images[1] = "img/girlshop4.jpg";
  images[2] = "img/men2.png";
  images[3] = "img/kid1.png";
  images[4] = "img/blog-3.jpg";
</script>

</head>
<body>

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
  <a class="navbar-brand navbc1" id="actives" href="Add2Bag.php"><i class="fa fa-shopping-bag" aria-hidden="true"><b id="home"> Bag</b></i></a>
  <a class="navbar-brand navbc2" id="actives" href="Features.php" style="width: 7rem;"><i class="fa fa-calendar-plus" aria-hidden="true"><b id="home"> Features</b></i></a>
  <a class="navbar-brand navbc3" id="actives" href="login.php"><i class="fa fa-user-secret" aria-hidden="true"><b id="home"> LogIn</b></i></a>
  </div>
  </div>
  </nav>
 

<body onload = "startTimer()">
  <img id="img" src="img/girlshop4.jpg"/>
  <button type="button" class="btn btn-info btn-sm left"  onclick="displayPreviousImage()" style="height: 2rem;"><b>Previous</b></button>
  <button type="button" class="btn btn-info btn-sm right" onclick="displayNextImage()" style="height: 2rem;"><b>Next</b></button>

<div class="container-fluid">
<section>
  <p class="paragraph">The Clothify Store is one of the most popular, affordable, and simple online ecommerce platforms out there.
  There's no set up or activation fee. Its scalability is one of the factors that help build trust.
  Our products are inspired by the people and world around us. 
  Beautiful, high quality goods that are designed especially for you. 
  You can have anything you want in life if you dress for it.
  Clothes have changed from a necessity to status symbol depicting one’s lifestyle, wealth, and fashion.
  
  
  </p>
</section>
</div>

<div class="neonText">
<h3 id="neontxthit">Clothify Collections</h3>
</div>

<!--First row cards-->
<div class="first-div row">   
    
<div class="tp col-10 col-sm-6 col-md-4">
<div class="card" style="width: 18rem;" id="hovercard">
<a href="Clothify4Women.php"><img class="card-img-top" src="img/WomenFashion13.jpg" alt="Card image cap"></a>
<div class="card-body">
<p class="card-text"><a href="Clothify4Women.php" class="cardheading"><b style="text-decoration: underline;">Clothing For Women:</b></a> <br>Style is a way to say who you are without having to speak.</p>
</div>
</div>
</div>

<div class="tp col-10 col-sm-6 col-md-4">
  <div class="card" style="width: 18rem;" id="hovercard">
  <a href="Clothify4Men.php"><img class="card-img-top" src="img/mencard71.jpg" alt="Card image cap"></a>
    <div class="card-body">
      <p class="card-text"><a href="Clothify4Men.php" class="cardheading"><b style="text-decoration: underline;">Men's Fashion Wear:</b></a> <br>Style is a reflection of your attitude and your personality.</p>
    </div>
  </div>
</div>

<div class="tp col-10 col-sm-6 col-md-4">
  <div class="card" style="width: 18rem;" id="hovercard">
    <a href="Clothify4Kids.php"><img class="card-img-top" src="img/kidcard10.jpg" alt="Card image cap"></a>
    <div class="card-body">
      <p class="card-text"><a href="Clothify4Kids.php" class="cardheading"><b style="text-decoration: underline;">Clothes For Kids:</b></a> <br>Fashion is the armor to survive the reality of everyday life. </p>
    </div>
  </div>
</div>
</div>



<!--second div-->

<div class="second-div row">

<div class="tp1 col-10 col-sm-6 col-md-4">
<div class="card" style="width: 18rem;" id="hovercard">
<a href="Clothify4Men.php"><img class="card-img-top" src="img/mencard1.jpg" alt="Card image cap"></a>
<div class="card-body">
<p class="card-text"><a href="Clothify4Men.php" class="cardheading"><b style="text-decoration: underline;">New Arival Jackets:</b></a> <br>Dress is the key collection of being yourself that elegance good taste, plus a dash of daring.</p>
</div>
</div>
</div>

<div class="tp1 col-10 col-sm-6 col-md-4">
<div class="card" style="width: 18rem;" id="hovercard">
<a href="Clothify4Kids.php"><img class="card-img-top" src="img/kidcard5.jpg" alt="Card image cap"></a>
<div class="card-body">
<p class="card-text"><a href="Clothify4Kids.php" class="cardheading"><b style="text-decoration: underline;">Deal Of The Day:</b></a> <br>A black dress is to fashion what red roses are to romance.
    Stars can’t shine without darkness. </p>
</div>
</div>
</div>

<div class="tp1 col-10 col-sm-6 col-md-4">
  <div class="card" style="width: 18rem;" id="hovercard">
  <a href="Clothify4Women.php"><img class="card-img-top" src="img/WomenFashion5.jpg" alt="Card image cap"></a>
  <div class="card-body">
  <p class="card-text"><a href="Clothify4Women.php" class="cardheading"><b style="text-decoration: underline;">Designer Brands:</b></a> <br>If you love something, wear it all the time. Find things that suit you. That's how U look extraordinary.</p>
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
<li><a href="#" id="address">Home</a></li>
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