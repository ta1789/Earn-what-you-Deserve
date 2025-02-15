<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap%27" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <title>Earn What You Deserve | About Us</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    body {
        margin: 0;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
    }

    h2 {
        font-weight: bold;
        font-size: 2rem;
    }


    a:link {
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
        color: #c1d5a4;
    }

    #title {
        color: black;
        padding: 1% 15%;
    }

    /* #navbarSupportedContent {
    text-align: right;
    padding: 20px;
  }
  .nav-item {
    padding: 0 18px;
    color: black;
  }
  .navbar {
    font-size: 1.2rem;
    font-weight: bold;
  }
  nav{
    background-color: #ffc107;
  }
   */
    #main-heading {
        font-size: 4rem;
    }

    .heading {
        font-size: 1.2rem;
    }

    #our-services {
        padding: 0% 15%;
    }

    #services {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .services-item {
        padding: 5% 7%;
        margin: 0% 3%;
        background: #ffc107;
        box-shadow: 5px 10px 10px grey;
    }

    #team {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #our-team {
        margin: 5%;
    }

    .team-members {
        padding: 2% 2%;
        margin: 0% 0%;
        background: #ffc107;
    }

    .team-members img {
        height: 200px;
    }

    .footer {

        width: 100%;
        margin-bottom: 0%;
        font-family: 'Montserrat', sans-serif;
    }

    .emerg-footer {
        height: 20px;
        background-color: rgb(242, 41, 41);
        text-align: center;
        color: white;
    }

    .cpry-footer {
        text-align: center;
        background-color: whitesmoke;
    }
    </style>
</head>

<body>

    <!-- <div class="container-fluid">
    <nav>
      <div class="navbar" id="navbarSupportedContent">
        <a class="nav-item" href="index.html">Home</a>
        <a class="nav-item" href="about_us.html">About Us</a>
        <a class="nav-item" href="contact.html">Contact</a>
        <a class="nav-item" href="FAQ.html">FAQ</a>
      </div>
    </nav>
  </div> -->

    <nav class="navbar navbar-expand-lg bg-light py-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo-main.jpeg" alt="" height="65px">
                Earn What you Deserve
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="aboutus.php">About us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            SignIn
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="farm/user-login.php">Customer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="farm/farmer/">Farmer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="farm/admin">Admin</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning" href="farm/registration.php">SignUp</a>
                    </li>
            </div>
        </div>
    </nav>

    <!-- Title section -->
    <section id="title">
        <!-- nav Bar -->

        <!-- Title -->
        <div class="row">
            <div class="palmpicture">
                <!-- <img src="images/logo-main.jpeg" alt="HMS Logo" height="25%" width="25%"> -->
            </div>
            <div class="heading my-3">
                <h1 id="main-heading" class="fw-bold my-3">About Us</h1>
                <p class="my-3">We are a Farmer-Customer Centric Application which provides easy trading 
                    between the farmers and the Customers without any middleman.
                </p>
            </div>
        </div>
    </section>


    </div>
    <section id="our-services">
        <h2>Our Services</h2>
        <div id="services">
            <div id="left" class="services-item">
                <img src="images/farmer-logo.jpg" alt="Farmer Icon" height="200" usemap=#workmap>
                <map name="workmap">
                    <area shape="rect" coords="0,0,200,200" href="farm/farmer" alt="">
                </map>
                <h3>Propose Crops</h3>
                <p>
                    Farmers can propose their crops along with their price here.
                </p>
                <button type="button" class="btn btn-warning"> <a href="farm/farmer">Farmer Login</a></button>
                <!-- <a href="view-doctors.php">View Doctors</a> -->
            </div>
            <div id="middle" class="services-item">
                <img src="images/crops.jpg" alt="Appointment Icon" height="200" usemap=#appmap>
                <map name="appmap">
                    <area shape="rect" coords="0,0,200,200" href="farm/book-appointment.php" alt="">
                </map>
                <h3>Buy Crops</h3>
                <p>
                    Easily book Crops from any location at any time
                </p>
                <button type="button" class="btn btn-warning"> <a href="farm/user-login.php">Buy Crops</a></button>
            </div>
            <!---<div id="right" class="services-item">
                <img src="images/prescription-1.png" alt="Prescription Icon" height="200" usemap=#healthmap>
                <map name="healthmap">
                    <area shape="rect" coords="0,0,200,200" href="farm/user-login.php" alt="">
                </map>
                <h3>View Health Record</h3>
                <p>
                    Easy access to your health records now at your fingertips
                </p>
            </div>-->
        </div>
    </section>

    <section id="our-team">
        <h2 class="my-3">Meet Our Team</h2>
        <div id="team">
            
            <div id="devansh" class="team-members">
                <img src="images/man.png">
                <h3>Tanmay <br>Mehrotra</h3>
            </div>
            
        </div>
    </section>

    <section id="footer">
        <div class="emerg-footer">
            <marquee behavior="" direction="left">
                <h6>For Help Contact +91-1234-567-899</h6>
            </marquee>
        </div>
    </section>

</body>


</html>