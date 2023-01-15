<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <!-- Student Functionalities
  1. Register Course.
  2. Register Graduation.
  3. Email for Dropout.
  4. View/Update Details.
  5. View Course, Graduation, Resources, & Timetable. -->

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

  <title>School System - Student Homepage</title>



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

<style type="text/css">
        
tbody th {
  background-color: #36c;
  color: #fff;
  text-align: left;
  padding: 25px;
  border: black 2px solid;
}

tbody tr:nth-child(even) th {
  background-color: #25c;
  padding: 25px;
}
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printTable3");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData4()
{
   var divToPrint=document.getElementById("printTable4");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData5()
{
   var divToPrint=document.getElementById("printTable5");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData6()
{
   var divToPrint=document.getElementById("printTable6");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

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
                  <a class="nav-link" href="#act"> Student Actions </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="#view"> View Data </a>
                </li>

                <li class="nav-item">
                  <x-app-layout></x-app-layout>
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
          Welcome Student
          </h1>
          <p>
         Best Way To Study
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
          <div class="col-md-3">
            <div class="about_img-container">
              <img src="images/about.png" alt="">
            </div>
          </div>
          <div class="col-md-9">
            <div class="about_detail-box">
              <h3>
               View Data
              </h3>
              <p>
              List of Students
              <br>
              Click on a Student's email to send them an acceptance letter.
              </p>
              <br>
                <table id="printTable">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                                    <th style="text-align: left;
                  padding: 8px;">Course</th>
               <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `name`, `phone_number`, `course`, `email`, `profile_photo_path`, `created_at`, `updated_at` FROM `users` WHERE `user_type` = '0'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["course"] . "</td><td><a class='none' href='mailto:" . $row["email"] . "'>" . $row["email"] . "</a></td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td><td><img src= 'images/" . $row["profile_photo_path"] . "' width = 150 title='" . $row["profile_photo_path"] . "'></td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData();" class="call_to-btn btn_white-border">
                  Print List of Students
                </a>
              </div>
            </div>
          </div>
        </div>
                <br>
                <div class="row">
          <div class="col-md-3">
            <div class="about_img-container">
              <img src="images/determine.png" alt="">
            </div>
          </div>
          <div class="col-md-9">
            <div class="about_detail-box">
              <p>
              List of Lecturers
              </p>
              <br>
                <table id="printTable1">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                  <th style="text-align: left;
                  padding: 8px;">Course</th>
                  <th style="text-align: left;
                  padding: 8px;">Unit</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `name`, `course`, `unit`, `phone_number`, `user_type`, `email`, `profile_photo_path`, `created_at`, `updated_at` FROM `users` WHERE `user_type` = '2'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["email"] . "</td><td>" . $row["course"] . "</td><td>" . $row["unit"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td><td><img src= 'images/" . $row["profile_photo_path"] . "' width = 150 title='" . $row["profile_photo_path"] . "'></td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData1();" class="call_to-btn btn_white-border">
                  Print List of Lecturers
                </a>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <div class="about_img-container">
              <img src="images/about.png" alt="">
            </div>
          </div>
          <div class="col-md-9">
            <div class="about_detail-box">
              <p>
              List of Courses
              </p>
              <br>
                <table id="printTable2">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Course ID</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Course Code</th>
                <th style="text-align: left;
                  padding: 8px;">Year</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `name`, `code`, `year`, `status`, `created_at`, `updated_at` FROM `courses`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["code"] . "</td><td>" . $row["year"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData2();" class="call_to-btn btn_white-border">
                  Print List of Courses
                </a>
              </div>
            </div>
          </div>
        </div>
        <br>
                        <div class="row">
          <div class="col-md-3">
            <div class="about_img-container">
              <img src="images/why.png" alt="">
            </div>
          </div>
          <div class="col-md-9">
            <div class="about_detail-box">
              <p>
              List of Resources
              <br>
              Click on a PDF File to download them to your device.
              </p>
              <br>
                <table id="printTable3">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Resource ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                                  <th style="text-align: left;
                  padding: 8px;">PDF File</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `course`, `name`, `pdf_path`, `created_at`, `updated_at` FROM `resources`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["course"] . "</td><td>" . $row["name"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td><td><a href='images/" .  $row["pdf_path"] . "' download>Download</a></td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData3();" class="call_to-btn btn_white-border">
                  Print List of Resources
                </a>
              </div>
            </div>
          </div>
        </div>
                <br>
                <div class="row">
          <div class="col-md-3">
            <div class="about_img-container">
              <img src="images/admission.png" alt="">
            </div>
          </div>
          <div class="col-md-9">
            <div class="about_detail-box">
              <p>
              List of Graduations
              </p>
              <br>
                <table id="printTable4">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Graduation ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Student ID</th>
                <th style="text-align: left;
                  padding: 8px;">Status </th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `course`, `student`, `status`, `created_at`, `updated_at` FROM `graduations`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["course"] . "</td><td>" . $row["student"] . "</td><td>" . $row["status"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData4();" class="call_to-btn btn_white-border">
                  Print List of Graduations
                </a>
              </div>
            </div>
          </div>
        </div>
        <br>
                <div class="row">
          <div class="col-md-3">
            <div class="about_img-container">
              <img src="images/about.png" alt="">
            </div>
          </div>
          <div class="col-md-9">
            <div class="about_detail-box">
              <p>
              Timetable
              </p>
              <br>
                <table id="printTable5">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Timetable ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Lecturer</th>
                <th style="text-align: left;
                  padding: 8px;">Unit</th>
                   <th style="text-align: left;
                  padding: 8px;">Day</th>
                   <th style="text-align: left;
                  padding: 8px;">Finish Time</th>
                  <th style="text-align: left;
                  padding: 8px;">Start Time</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "school_system");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `id`, `course`, `lec`, `unit`, `day`, `start_time`, `finish_time`, `created_at`, `updated_at` FROM `timetables`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["course"] . "</td><td>" . $row["lec"] . "</td><td>" . $row["unit"] . "</td><td>" . $row["day"] . "</td><td>" . $row["start_time"] . "</td><td>" . $row["finish_time"] . "</td><td>" . $row["created_at"] . "</td><td>" . $row["updated_at"] . "</td></tr>";
                }
                echo "</table>";
                } else { echo "No results"; }
                $conn->close();
                ?>

                </table>
                <br>
                <br>
              <div class="">
                <a href="" onclick="printData5();" class="call_to-btn btn_white-border">
                  Print Timetable
                </a>
              </div>
            </div>
          </div>
        </div>
        <br>
      </div>
    </section>


    <!-- end about section -->


  </div>


    <!-- contact section -->

   <section id="act" class="contact_section ">

        <div class="container">
         
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex justify-content-center d-md-block">
                <h2>
                  Student Actions
                </h2>
                <br>
                <h3>Register for a Course</h3>
                <br>
              </div>
              <form method="POST" action="{{ url('reg_course') }}" enctype="multipart/form-data" class="contact_form-container">
                @csrf
            <div class="mt-6">
                <label for="uid" value="" />
                <input id="uid" class="block mt-1 w-full" type="number" name="uid" :value="old('uid')" required placeholder="Student ID" />
            </div>

            <div class="mt-6">
                <label for="course" value="{{ __('Course') }}" />
                <select id="course" class="block mt-1 w-full" type="text" name="course" :value="old('course')" required autofocus autocomplete="course">
                  <option value="" selected disabled>Select A Course</option>
                <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `courses`";
                $all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["name"];?>">
                    <?php echo $category["name"];
                        // To show the course name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
                </select>
            </div>

            <div>
                <button type="submit" name="">
                    Register
                </button>
            </div>
        </form>
        <br>
        <br>
      </div>
            <div class="col-md-6">
              <div class="contact_img-box">
                <img src="images/students.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="d-flex justify-content-center d-md-block">
                <h3>Register for a Graduation</h3>
                <br>
              </div>
               <form method="POST" action="{{ url('reg_grad') }}" enctype="multipart/form-data" class="contact_form-container">
                @csrf
            <div class="mt-6">
                <label for="email" value="" />
                <input id="uid" class="block mt-1 w-full" type="number" name="uid" :value="old('uid')" required placeholder="Student ID" />
            </div>

            <div class="mt-6">
                <label for="course" value="{{ __('Course') }}" />
                <select id="course" class="block mt-1 w-full" type="text" name="course" :value="old('course')" required autofocus autocomplete="course">
                  <option value="" selected disabled>Select A Course</option>
                <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `courses`";
                $all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["name"];?>">
                    <?php echo $category["name"];
                        // To show the course name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
                </select>
            </div>

            <div>
                <button type="submit" name="">
                    Register
                </button>
            </div>
        </form>
        </div>
        </div>
      </div>
      </section>
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