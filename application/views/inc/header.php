<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swami Vivekanand Senior Secondary Scho ol</title>
  <link rel="stylesheet" href="./assests/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
</head>
<body class="">
  <nav class="hidden md:block">
    <div class="bg-sky-900 py-2 flex">
    <div class="basis-1/2  flex justify-center items-center space-x-5 text-white">
      <i class="fa-solid fa-phone"></i> 
      <a href="tel:+91987654321">+91 987654321</a>
    </div>
    <div class="basis-1/4  flex justify-center items-center space-x-5 text-white">
      <i class="fa-solid fa-envelope"></i>
      <a href="mailto:support@svsss.com">support@svsss.com</a>
    </div>
    <div class="basis-1/2 flex justify-center items-center space-x-2 sm:space-x-5 text-white">
      <a href="#"><i class="fa-brands fa-facebook"></i></a>
      <a href="#"><i class="fa-brands fa-youtube"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
      <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-linkedin"></i></a>
      <a href="#"><i class="fa-brands fa-pinterest"></i></a>
    </div>
    </div>
  </nav>
 <header>
  <div  class="flex  h-20 shadow-md">
    <div class="basis-[90%] md:basis-[90%] lg:basis-[30%] flex justify-center items-center ml-8">
<img src="./assests/img/gemschool-logo.png" alt="">
    </div>
    <div class=" hidden basis-[75%] lg:flex items-center justify-center ">
      <ul class="md:flex space-x-5 justify-center uppercase ">
        <li><a href="#">Home</a></li>
        <li class=" dropdown dropbtn"><a href="aboutus.php" >About us &nbsp;<i class="fa fa-caret-down"></i></a>
        <div class="dropdown-content">
      <a href="aboutus.php">About School</a>
      <a href="message.php">Message</a>
      <a href="vision.php">Vision Statement</a>
      <a href="aim.php">Our Aims</a>
      <a href="Infrastructure.php">Infrastructure</a>
    </div></li>
    <li class="dropbtn dropdown "><a href="#" >Admission &nbsp;<i class="fa fa-caret-down"></i></a>
        <div class="dropdown-content">
      <a href="admission.php">Admission Process</a>
      <a href="#">Download Admission Form</a>
      <a href="#">TC</a>
      <a href="#">Downloads</a>
    </div></li>
        <li><a href="#">Curriculum</a></li>
        <li class="dropbtn dropdown "><a href="#" >Student Facilities &nbsp;<i class="fa fa-caret-down"></i></a>
        <div class="dropdown-content">
      <a href="#">Transport Facilities</a>
    </div></li>
        <li><a href="result.php">Results</a></li>
        <li><a href="career.php">Career</a></li>
        <li><a href="enquiry.php">Contact us</a></li>
      </ul>
    </div>
    <div class="lg:hidden basis-[10%] pr-6 flex items-center pl-8">
     <a href="#" onclick="openNav()"> <i class="fa-solid fa-bars"></i></a>
    </div>
    <!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
  <ul class="flex flex-col">
  <li><a href="#">Home</a></li>
    <li>
    <button class="dropdown-btn text-center">About us
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="#">About School</a>
      <a href="#">Message</a>
      <a href="#">Vision Statement</a>
      <a href="#">Our Aims</a>
      <a href="#">Infrastructure</a>
  </div>  
    </li>
    <li>
    <button class="dropdown-btn text-center">Admission
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="#">Admission Process</a>
      <a href="#">Download Admission Form</a>
      <a href="#">TC</a>
      <a href="#">Downloads</a>
  </div>  
    </li>
    <li><a href="#">Curriculum</a></li>
    <li>
    <button class="dropdown-btn text-center">Student Facilities
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="#">Admission Process</a>
      <a href="#">Transport Facilities</a>
  </div>  
    </li>
        <li><a href="#">Results</a></li>
        <li><a href="#">Career</a></li>
        <li><a href="#">Contact us</a></li>
       
  </ul>
  </div>

</div>
  </div>
 </header>