<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>School System - Homepage</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              <img style="width:400px;height:100px;" src="images/logo1.png">
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#about"> About </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="#test"> Testimonial </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#why"> Why Us </a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}"> Login </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact Us</a>
                </li>

              </ul>
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h1>
            Best Way To Study
          </h1>
          <p>
            An efficient, secure and & state of the art education management system.
          </p>
          <div class="hero_btn-continer">
            <a href="#about" class="call_to-btn btn_white-border">
              Read More
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="images/hero.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->

  <div class="common_style">

    <!-- about section -->
    <section id="about" class="about_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="about_img-container">
              <img src="images/about.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about_detail-box">
              <h3>
                About our School
              </h3>
              <p>
                Our school offers quality education, as well as a secure and efficient system to automate and manage all operations.
              </p>
              <div class="">
                <a href="#test" class="call_to-btn btn_white-border">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- end about section -->

    <!-- why section -->
    <section id="why" class="why_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="why_img-container">
              <img src="images/why.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="why_detail-box">
              <h3>
                Why Learn With Us?
              </h3>
              <p>
                We offer state of the art infrastructure both online and on the ground, as well as collaborative efforts and team spirit to bring the best out of each one of us.
                <br>
                Email <a href="mailto:school@gmail.com">HERE</a> to apply today!
              </p>
              <div class="">
                <a href="{{ route('login') }}" class="call_to-btn btn_white-border">
                  Get Started
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- end why section -->

  </div>


  <!-- client section -->
  <section id="test" class="client_section layout_padding">
    <h2 class="">
      Testimonial
    </h2>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="images/t1.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Alex Macharia (with his friends)
                          </h5>
                          <p>
                            "I Made a lot a friends!"
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="images/t2.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Sarah Makena
                          </h5>
                          <p>
                            "An oasis of heartfelt education."
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="images/t3.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Ms. Odhiambo
                          </h5>
                          <p>
                            "I feel so blessed every day that my kids go to the Grauer School. You have managed to do what I assumed could not be done in a school."
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
     
    </div>
  </section>


  <!-- end client section -->


    <!-- contact section -->

  <!--   <section class="contact_section ">

        <div class="container">
         
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex justify-content-center d-md-block">
                <h2>
                  Contact Us
                </h2>
              </div>
              <form action="">
                <div class="contact_form-container">
                  <div>
                    <div>
                      <input type="text" placeholder="Name">
                    </div>
                    <div>
                      <input type="email" placeholder="Email">
                    </div>
                    <div>
                      <input type="text" placeholder="Phone Number">
                    </div>
                    <div class="mt-5">
                      <input type="text" placeholder="Message">
                    </div>
                    <div class="mt-5">
                      <button type="submit">
                        send
                      </button>
                    </div>
                  </div>
    
                </div>
    
              </form>
            </div>
            <div class="col-md-6">
              <div class="contact_img-box">
                <img src="images/students.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- end contact section -->
      <section id="contact" class="info_section layout_padding-top">
        <div class="info_logo-box">
          <h2>
              School System
          </h2>
        </div>
          <div class="container layout_padding2">
            <div class="row">
              <div class="col-md-6">
                <h5>
                    Useful Links 
                </h5>
                <ul>
                  <li>
                    <a href="#about">
                        About
                    </a>
                  </li>
                  <li>
                   <a href="#test">
                      Testimonial
                   </a>
                  </li>
                  <li>
                    <a href="{{ route('login') }}">
                        Get Started
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <h5>
                    Contact Us
                </h5>
                <p>
                    Email Address : <a href='mailto:school@gmail.com'>school@gmail.com</a>
                    <br>
                    Phone Number : 07382983994
                    <br>
                    Location : Nairobi, KENYA. 
                </p>
              </div>
            </div>
          </div>
          <div class="container">
              <div class="social_container">
                 
                  <div class="social-box">
                    <a href="">
                      <img src="images/twitter.png" alt="">
                    </a>
                    <a href="">
                      <img src="images/linkedin.png" alt="">
                    </a>
                    <a href="">
                      <img src="images/instagram.png" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </section>

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p> Copyright &copy; 2022 All Rights Reserved.</p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

 
</body>

 </html> 