<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><!DOCTYPE html>
        <html lang="en">

        <head>
        <title>Soccer &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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

<body>

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



                            <?php
                            session_start();
                            $conn = new mysqli('127.0.0.1', 'root', '12345678', 'train1');
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            else {

                                if(isset($_SESSION['name'])){
                                    $username=$_SESSION['name'];
                                    $sqlTrainer="SELECT * FROM Trainer WHERE username='$username'";
                                    $fetchTrainer=$conn->query($sqlTrainer);
                                    $sqlPlayer="SELECT * FROM Players WHERE username='$username'";
                                    $fetchPlayer=$conn->query($sqlPlayer);

                                    echo ' <li ><a href="index.php" class="nav-link">Home</a></li>';
                                    echo '<li><a href="matches.php" class="nav-link">Matches</a></li>';
                                    echo '<li><a href="players.php" class="nav-link">Players</a></li>';
                                    echo '<li><a href="blog.php" class="nav-link">Blog</a></li>';
                                    echo '<li><a href="contact.php" class="nav-link">Contact</a></li>';

                                    if($fetchPlayer->num_rows>0){

                                        echo '<li class="active"><a href="player.php" >Player</a></li>';

                                    }
                                    else if($fetchTrainer->num_rows>0){
                                        echo '<li class="active"><a href="trainer.php" >Trainer</a></li>';
                                    }
                                    echo " <li><a href='logout.php' class='nav-link'>Logout</a></li>";


                                }
                                else{
                                    echo " <li><a href='signin.php' class='nav-link'>SignIn</a></li>";
                                }
                            }


                            ?>
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
                <div >
                    <?php
                    $conn = new mysqli('127.0.0.1', 'root', '12345678', 'train1');

                    if (isset($_SESSION['name'])) {


                        $username=$_SESSION['name'];
                        $sql="SELECT username FROM Players WHERE username = '$username'";
                        $flag=false;
                        $fetch=$conn->query($sql);


                        if($fetch){
                            if(!$fetch->num_rows>0){
                                header("Location: signin.php");
                                exit();
                            }

                        }


                        echo "<h1 style=''>". $_SESSION['name']."</h1>";
                    }
                    else{
                        header("Location: signin.php");
                        exit();
                    }

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    else{
                        $username= $_SESSION['name'];


                        $sqlPlayer = "SELECT * FROM Players WHERE username = '$username' ";



                        $fetchPlayer=$conn->query($sqlPlayer);


                        if($fetchPlayer){
                            if($fetchPlayer->num_rows>0){
                              $rows=$fetchPlayer->fetch_assoc();
                              echo "<h3 style='margin-left: 2%'>"."First name : ".$rows['FirstName']."<br> Last Name : ".$rows['LastName']."<br> Email : ".$rows['Email']."<br> Length : ".$rows['Length']." <br>Weight : ".$rows['Weight']." <br>Team : ".$rows['Team']."</h3>";
                            }
                            $sql = "SELECT idTeam1, idTeam2, Date FROM Matches 
        WHERE idTeam1 = (SELECT idTeam FROM team_players WHERE usernamePlayer = '$username'   ORDER BY id DESC  LIMIT 1) 
        OR idTeam2 = (SELECT idTeam FROM team_players WHERE usernamePlayer = '$username'   ORDER BY id DESC  LIMIT 1) 
       ";
                            $fetch=$conn->query($sql);
                            if($fetch->num_rows>0){
                                $rows=$fetch->fetch_assoc();
                                $idTeam1=$rows['idTeam1'];
                                $idTeam2=$rows['idTeam2'];
                                $sqlTeam1="SELECT Name FROM Team WHERE id='$idTeam1'";
                                $fecthTeam1= $conn->query($sqlTeam1);
                                $rowTeam1=$fecthTeam1->fetch_assoc();
                                $sqlTeam2="SELECT Name FROM Team WHERE id='$idTeam2'";
                                $fetchTeam2=$conn->query($sqlTeam2);
                                $rowTeam2=$fetchTeam2->fetch_assoc();
                                echo "<br><h2>Match : ".$rowTeam1['Name']." VS ". $rowTeam2['Name']."</h2>";
                                echo "<h3>"."Date : ".$rows['Date']."</h3>";

                        }
                            else{
                                echo "<br><h3>No Match Found</h3>";
                            }


    }

                    }
                    ?>

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



</div>
<!-- .site-wrap -->

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


<script src="js/main.js">


</script>

</body>

</html></title>
</head>
<body>

</body>
</html>