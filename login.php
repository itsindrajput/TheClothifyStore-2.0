<?php include("db.php"); session_start(); ?>
<?php
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password_input = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows === 1) {
        $user = $res->fetch_assoc();
        if (password_verify($password_input, $user['password'])) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit;
        } else {
            $msg = "Invalid password.";
        }
    } else {
        $msg = "User not found.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>The Clothify Store | LogIn Page |</title>  
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--Html css-->
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
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
    <a class="navbar-brand" id="actives" href="signup.php"><i class="fa fa-user-secret" aria-hidden="true"><b id="home">SignUp</b></i></a>
    </div>
    </div>
</nav>

<!-- Login Card Start -->
<div class="container" style="padding-top: 1.3rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
    <div class="wrapper">
        <div id="auth" class="authentication">
            <div class="wrapper">
                <div id="login" class="card">
                    <div class="wrapper">
                        <div class="animation form login">
                            <div class="wrapper">
                                <h3 class="title" style="text-align: left;">Sign In</h3>
                                
                                <!-- Display message if set -->
                                <?php if (!empty($msg)): ?>
                                    <p style="color: red;"><?php echo $msg; ?></p>
                                <?php endif; ?>

                                <form method="POST">
                                    <input type="hidden" name="action" value="login">
                                    <div class="form-group input">
                                        <label>Username:</label>
                                        <input type="text" name="username" id="user-username-login" class="user-email" required>
                                    </div>
                                    <div class="form-group input">
                                        <label>Password:</label>
                                        <input type="password" name="password" id="user-password-login" class="user-password" required>
                                    </div>
                                    <button type="submit" class="button color-1 login" id="button-login">Login</button>
                                </form>

                                <!-- Link to signup -->
                                <p style="margin-top: 10px;">
                                    Don't have an account? 
                                    <a href="signup.php" id="button-register-switch">Signup!</a>
                                </p>
                            </div>
                        </div>
                        <div class="animation note login">
                            <div class="wrapper">
                                <h1 style="overflow: hidden;" class="head1">Welcome To The Clothify Store.</h1>
                                <p>Don't have an account?</p>
                                <p>Sign up with us today!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Registration section (optional; you can remove if not needed here) -->
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