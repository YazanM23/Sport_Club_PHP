<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soccer &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">



</head>

<body >


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="index.php">
                        <img src="images/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="ml-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li ><a href="index.php" class="nav-link">Home</a></li>

                            <li><a href="matches.php" class="nav-link">Matches</a></li>
                            <li><a href="players.php" class="nav-link">Players</a></li>
                            <li><a href="blog.php" class="nav-link">Blog</a></li>
                            <li><a href="contact.php" class="nav-link">Contact</a></li>
                            <li class="active"><a href="signin.php" class="nav-link">SignIn</a></li>
                            <li><a href="signup.html" class="nav-link">SingUp</a></li>
                        </ul>
                    </nav>

                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                            class="icon-menu h3 text-white"></span></a>
                </div>
            </div>
        </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
        <div class="container">
            <section class="ftco-section" style="padding-top: 25%;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section">Login </h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="login-wrap p-0">
                                <h3 class="mb-4 text-center">Have an account?</h3>
                                <form  class="signin-form" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control"id="username" placeholder="Username" name = "user" required>
                                    </div>
                                    <div class="form-group">
                                        <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" onclick="login();" class="form-control btn btn-primary submit px-3">Sign In</button>
                                    </div>
                                    <div class="form-group d-md-flex">
                                        <div class="w-50">
                                            <label class="checkbox-wrap checkbox-primary">Remember Me
                                                <input type="checkbox" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="w-50 text-md-right">
                                            <a href="#" style="color: #fff">Forgot Password</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row align-items-center">

                </div>

            </div>


    </div>
    </div>




    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>News</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Club News</a></li>
                            <li><a href="#">Media Center</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">RSS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>Tickets</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Online Ticket</a></li>
                            <li><a href="#">Payment and Prices</a></li>
                            <li><a href="#">Contact &amp; Booking</a></li>
                            <li><a href="#">Tickets</a></li>
                            <li><a href="#">Coupon</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>Matches</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Standings</a></li>
                            <li><a href="#">World Cup</a></li>
                            <li><a href="#">La Lega</a></li>
                            <li><a href="#">Hyper Cup</a></li>
                            <li><a href="#">World League</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>Social</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row text-center">
                <div class="col-md-12">
                    <div class=" pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="icon-heart"
                                                                                          aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>



</div><script>
    function login() {


        var username = $("#username").val();
        var password = $("#password-field").val();

        $.ajax({
            url: 'loginAPI.php',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({ username: username, password: password }),
            success: function(response) {
                if (response.status === 'success') {
                    window.location.href = response.redirect; // Redirect to the appropriate page
                } else {
                    alert(response.message); // Display error message
                }
            },
            error: function(xhr, status, error) {
                alert("Error: " + error);
            }
        });
    }
</script>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>


<script src="js/main.js"></script>

</body>

</html>