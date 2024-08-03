<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "medilab";

// Create a connection

$conn = mysqli_connect($server, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from POST request and sanitize
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    
    
    
    
    // In a real-world scenario, you'd hash passwords before storing them

    // Prepare and bind
    $stmt = mysqli_prepare($conn, "INSERT INTO `appointment` (`name`,`phone`, `date`) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sss", $name, $phone, $date);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
      echo "<script>alert('Appointment Booked Successfully');</script>";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dr Ritu Saxena</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  
  
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <img src="assets/img/opchar.png" class=" img-fluid " alt="devo"  style="height: 40px; width: auto; 
           object-fit: cover;">
      
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
          
            <li><a href="#team">Our Team</a></li>
          
          
            <li class="dropdown"><a href="#"><span>Scope of Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
              <li class="dropdown "><a href="#"><span> HIGH RISK OBSTETRICS </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Gestational Diabetes mellitus </a></li>
                    <li><a href="#">Hypertension In Pregnancy Including eclampsia</a></li>
                    <li><a href="#">Bad Obstetric History and Recurrent Pregnancy Losses</a></li>
                    <li><a href="#">Antepartum Hemorrhage</a></li>
                    <li><a href="#">Malpresentations (Breech & Transverse Lie)</a></li>
                    <li><a href="#">Ectopic Pregnancy & Abortion   </a></li>
                    <li><a href="#">Elderly Primigravida (>30 Yrs) </a></li>
                    <li><a href="#">Other Medical Disorders in Pregancy Including Asthma, Convulsions </a></li>
                  
                  </ul>
                <li class="dropdown"><a href="#"><span>HIGH RISK GYNECOLOGY </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul >
                    <li><a href="#">Menstrual Problems</a></li>
                    <li><a href="#">Benign & Malignant Pathologies</a></li>
                    <li><a href="#">Infertility Related Issued</a></li>
                    <li><a href="#">Contraception Services</a></li>
                
                  </ul>
                </li>
                
              </ul>
            </li>

          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-sm-block " href="#appointment">Make an Appointment</a>

      </div>

    </div>

  </header>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="assets/img/devopchar.png" class="img-fluid mx-auto" alt="">
      </div>
    
    </div>
  </div>
</div>


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>WELCOME TO devOpchar</h2>
          <!-- <p>We are team of talented designers making websites with Bootstrap</p> -->
        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Why Choose devOpchar?</h3>
              <p>
              Choose Devopchar for Dr. Ritu Saxena's gynecology practice for its compassionate care and state-of-the-art medical facilities. Experience personalized treatment in a comfortable and patient-centric environment.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

                <!-- <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Corporis voluptates officia eiusmod</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>End Icon Box -->

                <!-- <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="bi bi-gem"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>End Icon Box -->

                <!-- <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-inboxes"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>End Icon Box -->

              </div>
            </div>
          </div>
        </div><!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

         
          <div class="col-md-12 content" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-center">About Us</h3  >
            <p>
            Welcome to our practice, led by the renowned Dr. Ritu Saxena, a dedicated and highly experienced gynecologist committed to providing exceptional healthcare for women. Dr. Saxena’s illustrious career is marked by her profound expertise, advanced training, and unwavering dedication to patient care.
</p>
<h5>Our Mission</h5>
<p>To deliver the highest quality gynecological and obstetric care using advanced technologies and state-of-the-art facilities, ensuring the best outcomes for our patients.</p>
<h5>Qualifications</h5>
<p>MD and MBBS from Moti Lal Nehru Medical College, Allahabad
Specialized training in Hysteroscopy, Colposcopy, and Gynecological Endoscopy
Expertise in ultrasound-aided diagnosis, HIV/AIDS prevention, and treatment
Professional Experience:</p>
<h5>Consultant at Shekhar Hospital, Jagrani Hospital, Goel Hospital, and VLCC</h5>
<p>Managing both indoor and outdoor patients, specializing in high-risk pregnancies, conducting normal and cesarean deliveries, and performing open and laparoscopic surgeries.</p>
<h5>Former Consultant at Vivekanand Polyclinic</h5>
<p>Pioneered endoscopic surgery in the gynecology department, managed infertility clinics, and established rural health clinics for women and children.</p>
<h5>Founding Consultant at Sushila Tiwari Memorial Hospital</h5>
<p>Established the gynecology and obstetrics department, contributing to the hospital’s elevation to a medical college.
</p>
<h5>Registrar at Fatima Hospital</h5>
<p>Assisted in surgeries, performed minor procedures, and managed outpatient departments.</p>
<h5>Leadership and Training</h5>
<p>Established regular classes for women and child health
Conducted antenatal group classes and trained ASHA and ANM workers
Delivered technical training sessions on maternal and child health for organizations like UNICEF, CARE, and PSI</p>
<h5>Community Engagement</h5>
<p>Regular speaker on maternal and child health on All India Radio and Lucknow Doordarshan
Provided training and counseling on family planning, adolescent health, and antenatal care
Actively involved in various family planning programs and RCH projects</p>
<h5>Affiliations</h5>
<p>Life Member of the Indian Medical Association, Association of Private Medical Practitioners, Indian Association of Gynecological Endoscopists, Indian Menopausal Society, and Indian Fertility Society</p>
<p>At our clinic, we prioritize comprehensive, compassionate care tailored to the unique needs of each patient. With Dr. Ritu Saxena’s extensive experience and commitment to excellence, you can trust that you are in capable hands. Join us and experience the highest standards of gynecological and obstetric care.</p>
           
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-user-doctor"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-regular fa-hospital"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-flask"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-award"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fas fa-heartbeat"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Laparoscopic Hysterectomy(removal of uterus)</h3>
              </a>
              <p>A laparoscopic hysterectomy is a minimally invasive surgical procedure to remove the uterus using small incisions, a camera, and specialized instruments. It offers benefits such as reduced pain, shorter hospital stays, and quicker recovery compared to traditional open surgery.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-pills"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Laparoscopic Myomectomy (Removal of Fibroids)</h3>
              </a>
              <p>Laparoscopic myomectomy is a minimally invasive surgical procedure used to remove uterine fibroids. It involves small incisions through which a laparoscope and specialized instruments are inserted to excise the fibroids while preserving the uterus. This technique typically results in less pain, reduced scarring, and faster recovery compared to traditional open surgery.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-hospital-user"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Laparoscopic Evaluation of Infertility (Hysterolaparoscopy)</h3>
              </a>
              <p>Is a diagnostic procedure that combines laparoscopy and hysteroscopy to assess infertility. This minimally invasive technique allows the doctor to examine the pelvic organs, including the uterus, fallopian tubes, and ovaries, to identify potential issues affecting fertility. It provides a comprehensive view, aiding in the diagnosis of conditions like endometriosis, fibroids, and tubal blockages.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-dna"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Laparoscopic cystectomy</h3>
              </a>
              <p>A minimally invasive procedure, involves the removal of ovarian cysts using small incisions and a laparoscope. This technique ensures precise excision with minimal disruption to surrounding tissues, leading to reduced postoperative pain and quicker recovery. The procedure typically results in smaller scars and shorter hospital stays, allowing patients to resume normal activities swiftly. It is an effective treatment option for various types of ovarian cysts, offering both diagnostic and therapeutic benefits.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-wheelchair"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Opening of blocked tubes</h3>
              </a>
              <p> This intervention is often performed when the tubes are obstructed due to conditions like endometriosis or pelvic inflammatory disease. The goal is to enable the passage of eggs from the ovaries to the uterus, improving the chances of conception.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-notes-medical"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Uterine septal resection</h3>
              </a>
              <p>Is a surgical procedure to remove a septum, or partition, within the uterus. This condition can cause reproductive issues, such as miscarriage or difficulty becoming pregnant. The surgery is typically performed using hysteroscopy, which allows the surgeon to access and correct the septum through the vagina and cervix.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->


    <section id="appointment" class="appointment section container bg-body-secondary">
    <div class="container section-title " data-aos="fade-up">
     <h2>Appointment</h2>
     <p class="mb-5">Book Your Doctor Appointment Online.</p>
     <div class="row justify-content-between">
      <div class="col-md-5">
      <form action="#"  method="POST" class=" "  id="appointmentForm ">

      <div class=" form-group mb-3">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
      </div>
      <div class=" form-group mt-3 mt-md-0 mb-3">
      <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
       </div>
       <div class=" form-group mt-3 mt-md-0 mb-3">
     <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
      </div>
      <button type="submit" class=" btn btn-primary w-full mb-3">Make an Appointment</button>
    </form>
  </div>
  <div class="col-md-5">
    <h3 class="text-start">opening hours</h3>
    <p class="text-start mb-3">Our hospital has flexible hours for your convenience. Get excellent healthcare and expert medical services when you need them.</p>
    
      <p class="text-start "><span class="fw-bold"> Monday  to Saturday :- </span> Morning  : 12:00 noon to 03:00 pm   </p>
      <p class="text-start"> Evening : 05:00 pm to 07:00 pm </p>
      <p class="text-start"><span class="fw-bold"> Sunday :- </span> Closed || Emergency Only || Prior Appointments.</p>
  
  <hr style="border: 4px solid black; ">
  <div class="d-flex gap-2">
                    <i class="bi bi-telephone-fill"></i>
                    <p> 9696888999</p>
                </div>
                <div class="d-flex gap-2">
                    <i class="bi bi-envelope-fill "></i>
                    <p> test@gmail.com</p>
                </div>
                  

  </div>
 </div>
</div>
</section>







          

          
         

   




    
    <!-- Departments Section -->
    <section id="departments" class="departments section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Departments</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show " data-bs-toggle="tab" href="#departments-tab-1">Gynecology Department</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " data-bs-toggle="tab" href="#departments-tab-2">Cosmetology and Dentistry</a>
              </li>
              
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="departments-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Gynecology Department</h3>
                    
                    <p>Welcome to our Gynecology Department, where we provide comprehensive care for women at all stages of life. Our services include routine check-ups, prenatal care, and specialized treatments such as laparoscopic surgeries and infertility management. Led by the esteemed Dr. Ritu Saxena, our team is dedicated to offering personalized, compassionate care using the latest medical advancements. We prioritize patient education and preventive care, ensuring every woman receives the support and treatment she deserves. Trust us to be your partners in health, committed to your well-being.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cosmetology and Dentistry</h3>
                    
                    <p>Welcome to our Cosmetology and Dentistry Department, where we blend advanced technology with expert care to enhance your beauty and oral health. Our team of skilled professionals offers a range of services, from cosmetic procedures and skincare treatments to comprehensive dental care, including restorative and cosmetic dentistry. We focus on personalized treatments tailored to your unique needs, ensuring the highest standards of safety and satisfaction. Experience the perfect combination of aesthetic enhancement and dental excellence in a comfortable and welcoming environment. Your journey to a radiant smile and glowing skin starts here.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Departments Section -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Doctors</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr ritu saxena</h4>
                <span>Gynecologist</span>
                <p>Expertise in gynecology and her compassionate approach ensure exceptional care for every patient. </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr surabhi shukla</h4>
                <span>Cosmetology and Dentistry</span>
                <p>Experience top-tier cosmetic and dental care, enhancing your beauty and smile with expert precision.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          
        </div>

      </div>

    </section><!-- /Doctors Section -->

     <!-- Team Member -->
 
     <section id="team">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 mx-auto text-center offset-md-1">
                    <h1>Meet Our team Members</h1>
                    <p>At Sun Services, our team members are dedicated professionals with a passion for empowering
                        clients to achieve their financial goals.
                        With a focus on integrity, innovation, and excellence, our team members work collaboratively to
                        deliver exceptional service and support,
                        ensuring the success and satisfaction of our valued clients at every step of their financial
                        journey.</p>
                </div>
            </div>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="team-member card-effect">
                        <img src="https://mir-s3-cdn-cf.behance.net/projects/404/1e4b16160221757.Y3JvcCwzMDAwLDIzNDYsMCww.jpg" alt="">
                        <h5 class="mb-0 mt-4">Abhishek kr pandey</h5>
                        <p>Physiotherapist</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/company/sun-services-lucknow"><i class='bx bxl-linkedin'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="https://www.instagram.com/sunserviceslucknow?igsh=MWltMnczc2tvMGlhMA=="><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member card-effect">
                        <img src="https://mir-s3-cdn-cf.behance.net/projects/404/1e4b16160221757.Y3JvcCwzMDAwLDIzNDYsMCww.jpg" alt="">
                        <h5 class="mb-0 mt-4">Dharmendra</h5>
                        <p>OT Technician</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/company/sun-services-lucknow"><i class='bx bxl-linkedin'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="https://www.instagram.com/sunserviceslucknow?igsh=MWltMnczc2tvMGlhMA=="><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member card-effect">
                        <img src="https://mir-s3-cdn-cf.behance.net/projects/404/1e4b16160221757.Y3JvcCwzMDAwLDIzNDYsMCww.jpg" alt="">
                        <h5 class="mb-0 mt-4">Ameesha</h5>
                        <p>Staff Nurse</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/company/sun-services-lucknow"><i class='bx bxl-linkedin'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="https://www.instagram.com/sunserviceslucknow?igsh=MWltMnczc2tvMGlhMA=="><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>    
                <div class="col-md-4">
                    <div class="team-member card-effect">
                        <img src="https://mir-s3-cdn-cf.behance.net/projects/404/1e4b16160221757.Y3JvcCwzMDAwLDIzNDYsMCww.jpg" alt="">
                        <h5 class="mb-0 mt-4">Kanchan</h5>
                        <p>Staff Nurse</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/company/sun-services-lucknow"><i class='bx bxl-linkedin'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="https://www.instagram.com/sunserviceslucknow?igsh=MWltMnczc2tvMGlhMA=="><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member card-effect">
                        <img src="https://mir-s3-cdn-cf.behance.net/projects/404/1e4b16160221757.Y3JvcCwzMDAwLDIzNDYsMCww.jpg" alt="">
                        <h5 class="mb-0 mt-4">Anjali</h5>
                        <p>Staff Nurse</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/company/sun-services-lucknow"><i class='bx bxl-linkedin'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="https://www.instagram.com/sunserviceslucknow?igsh=MWltMnczc2tvMGlhMA=="><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member card-effect">
                        <img src="https://mir-s3-cdn-cf.behance.net/projects/404/1e4b16160221757.Y3JvcCwzMDAwLDIzNDYsMCww.jpg" alt="">
                        <h5 class="mb-0 mt-4">Priyanka</h5>
                        <p>Staff Nurse</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/company/sun-services-lucknow"><i class='bx bxl-linkedin'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="https://www.instagram.com/sunserviceslucknow?igsh=MWltMnczc2tvMGlhMA=="><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
     <!-- /Team Member -->
  
   


    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>We have answers (well, most of the times!)
        Below you'll find answers to the most common questions you may have on , Also, please feel free to check out.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>What are the common symptoms of PCOS (Polycystic Ovary Syndrome)?</h3>
                <div class="faq-content">
                  <p>Common symptoms of PCOS include irregular periods, excessive hair growth (hirsutism), acne, weight gain, and difficulty getting pregnant. Some women may also experience hair thinning on the scalp.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>How often should I have a Pap smear test?</h3>
                <div class="faq-content">
                  <p>It is generally recommended to have a Pap smear every three years starting at age 21. Women aged 30-65 should have a Pap test combined with an HPV test every five years or a Pap test alone every three years.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>What are the early signs of pregnancy?</h3>
                <div class="faq-content">
                  <p>Early signs of pregnancy can include missed periods, nausea (morning sickness), breast tenderness, increased urination, fatigue, and food aversions or cravings.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>How can I manage menstrual pain?</h3>
                <div class="faq-content">
                  <p>Menstrual pain can be managed with over-the-counter pain relievers like ibuprofen, heating pads, regular exercise, and relaxation techniques. In some cases, hormonal birth control may be prescribed to reduce symptoms.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>What birth control options are available and what are their side effects?</h3>
                <div class="faq-content">
                  <p>Birth control options include pills, patches, injections, IUDs, and implants. Side effects vary by method but can include nausea, weight gain, mood changes, and irregular bleeding. It's important to discuss with your doctor to find the best option for you.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>When should I consult a gynecologist about irregular periods?</h3>
                <div class="faq-content">
                  <p>You should consult a gynecologist if you experience periods that are very heavy, last longer than seven days, are extremely painful, or occur more frequently than every 21 days or less frequently than every 35 days.  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <div class="container">

        <div class="row align-items-center">

          <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
            <h3>Testimonials</h3>
            <p>
            We believe in patient satisfaction. Here are some testimonials by our worthy patients
            </p>
            <a href="https://www.google.com/maps/place/628,+Dr.+Ritu+Saxena,+628,+Shakti+Nagar,+Indira+Nagar,+Lucknow,+Uttar+Pradesh+226016/data=!4m2!3m1!1s0x399bfd452dc1369b:0x9e75b5bf0004e3d?utm_source=mstt_1" class="btn btn-primary">Review Us</a>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Priya Sharma</h3>
                        <!-- <h4>Ceo &amp; Founder</h4> -->
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Dr. Ritu Saxena’s expertise and compassionate care made my high-risk pregnancy journey smooth and stress-free. Her thorough explanations and personalized attention were incredibly reassuring. I couldn’t have asked for a better gynecologist.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Aarti Verma</h3>
                        <!-- <h4>Designer</h4> -->
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>From the moment I stepped into her clinic, Dr. Saxena made me feel comfortable and at ease. Her knowledge and professionalism are unmatched, and she handled my laparoscopic surgery with exceptional skill. I’m grateful for her dedication and support.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3> Nidhi Kapoor</h3>
                        <!-- <h4>Store Owner</h4> -->
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Dr. Ritu Saxena is a true gem in the field of gynecology. She provided excellent care during my antenatal period, addressing all my concerns with patience. Her proactive approach and thorough check-ups ensured a healthy pregnancy and delivery.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3> Shalini Gupta</h3>
                        <!-- <h4>Freelancer</h4> -->
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Dr. Saxena’s commitment to her patients is evident in every interaction. Her guidance and counseling on family planning were invaluable, helping me make informed decisions. I highly recommend her to anyone seeking expert gynecological care.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Meenakshi Rao</h3>
                        <!-- <h4>Entrepreneur</h4> -->
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Having undergone a cystectomy under Dr. Ritu Saxena’s care, I can confidently say she is an outstanding surgeon. Her precision and attention to detail, combined with her warm demeanor, made the entire experience seamless and positive.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

  
     
     
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class=" col-md-4 footer-about">
          <a href="" class=" d-flex align-items-center">
            <img src="assets/img/center.png"   alt=""   style="height: 100px; width: auto; object-fit: contain; object-fit: cover; margin-top: -15px; margin-left: -110px">
          </a>
          <div class="footer-contact pt-3 ">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class=" col-md-4 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class=" col-md-4 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <!-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div> -->

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dr Ritu Saxena</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>


  <script>
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
    window.onload = function () {
      myModal.show();
    }
  </script>

</body>

</html>


