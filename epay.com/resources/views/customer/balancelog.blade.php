<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=0.29" name="viewport">

  <title>E-Pay | Customer-Balance Log</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/MainPage.css')}}" rel="stylesheet">
  <link href="{{asset('css/Create.css')}}" rel="stylesheet">
  <link href="{{asset('css/CreateButton.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Reveal - v4.0.1
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- <iframe src="{{asset('music/RunicPower.mp3')}}" allow="autoplay" style="display: none"></iframe>
<audio id="player" autoplay loop>
    <source src="{{asset('music/RunicPower.mp3')}}" type="audio/mp3">
</audio> -->

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:epay.management.21@gmail.com">EPay@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:+8801869510882">+880 186 510882</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/Nafi71340800" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/nafi.king16/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/dauntless_nafi/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/nafi-mahmud-350141185/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="{{route('customer.balanceLog')}}">E<span>Pay</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li class="dropdown"><a href="#"><span>Download PDF</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="{{route('balancePDF')}}">All Status</a></li>
                  <li><a href="{{route('approvedPDF')}}">Approved Status</a></li>
                  <li><a href="{{route('pendingPDF')}}">Pending Status</a></li>
                </ul>
          </li>
        <li><a class="nav-link scrollto" href="{{route('uploadExcel')}}">Upload Excel</a></li>
        <li><a class="nav-link scrollto" href="{{route('customer.create')}}">Refer Customer</a></li>
        <li><a class="nav-link scrollto" href="{{route('customer.balancecreate')}}">Create Balance</a></li>
        <li><a class="nav-link scrollto" href="{{route('customer.reviewcreate')}}">Create Review</a></li>
        <li><a class="nav-link scrollto" href="{{route('customer.customer')}}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{route('logout.index')}}">Logout</a></li>
        <li class="dropdown"><a class="nav-link scrollto" href="#contact"><span>{{ session('username') }}</span> <i class="bi bi-chevron-down"></i></a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2>Balance Log<br><span style="color: red; text-decoration:none">{{session('username')}}</span></h2>
      <div>
        <a href="{{route('customer.userlist')}}" class="btn-get-started scrollto">Profile</a>
        <a href="{{route('customer.balancelist')}}" class="btn-get-started scrollto">Balance</a>
        <a href="{{route('customer.purchaselist')}}" class="btn-get-started scrollto">Purchase</a>
        <a href="{{route('customer.reviewlist')}}" class="btn-get-started scrollto">Review</a>
        <a href="{{route('customer.messagelist')}}" class="btn-get-started scrollto">Message</a>
      </div>
    </div>

    <div class="hero-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/5.jpg');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">
<br>
    <!-- ======= Services Section ======= -->
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>History</h2>
        </div>

    <section id="contact">
      <div class="container">
 
                <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        You can check history of your balance log here
					</span>

<center><th><h4 style="color: green">Approved Status of Last 7 Days</h4></th></center>

<div style="color: white; background-color: green; text-align: center">
Count:&nbsp;&nbsp;
{{$sevenApprovedCount}} <br><br>
</div>

<center>
<table class="table table-striped table-bordered" border="0" width= "1090px" style="font-size:14px; text-align:center">

    <tr>
        <th>Username</th>
        <th>Card Number</th>
        <th>Bank Name</th>
        <th>Cashed-In</th>
        <th>Cashed-Out</th>
        <th>Loan</th>
        <th>Mobile Recharge</th>
        <th>Electricity Bill</th>
        <th>Balance</th>
        <th>Status [Loan]</th> 
        <th>Total Purchased</th>
        <th>Account Creation Time</th>
        <th>Account Updated Time</th>
      </tr>

        @foreach ($sevenApprovedDays as $i)
        <tr>
         <td>{{$i->username}}</td>
         <td>{{$i->card_no}}</td>
         <td>{{$i->bank_name}}</td>
         <td>৳{{$i->added}}</td>
         <td>৳{{$i->transferred}}</td>
         <td>৳{{$i->loan}}</td>
         <td>৳{{$i->mobile_recharge}}</td>
         <td>৳{{$i->electricity_bill}}</td>
         <td>৳{{$i->balance}}</td>
         <td>{{$i->status}}</td>
         <td>৳{{$i->total_purchased}}</td>
         <td>{{$i->created_at}}</td>
         <td>{{$i->updated_at}}</td>   
        </tr>
        @endforeach     
</table>
</center>

<tr><td><br><br></td></tr>

<center><th><h4 style="color: red">Pending Status of Last 7 Days</h4></th></center>

<div style="color: white; background-color: red; text-align: center">
Count:&nbsp;&nbsp;
{{$sevenPendingCount}} <br><br>
</div>

<center>
<table class="table table-striped table-bordered" border="0" width= "1090px" style="font-size:14px; text-align:center">
    <tr>
        <th>Username</th>
        <th>Card Number</th>
        <th>Bank Name</th>
        <th>Cashed-In</th>
        <th>Cashed-Out</th>
        <th>Loan Request</th>
        <th>Mobile Recharge</th>
        <th>Electricity Bill</th>
        <th>Balance</th>
        <th>Status [Loan]</th> 
        <th>Total Purchased</th>
        <th>Account Creation Time</th>
        <th>Account Updated Time</th>
    </tr>
    
        @foreach ($sevenPendingDays as $i)
     <tr>
        <td>{{$i->username}}</td>
         <td>{{$i->card_no}}</td>
         <td>{{$i->bank_name}}</td>
         <td>৳{{$i->added}}</td>
         <td>৳{{$i->transferred}}</td>
         <td>৳{{$i->loanreq}}</td>
         <td>৳{{$i->mobile_recharge}}</td>
         <td>৳{{$i->electricity_bill}}</td>
         <td>৳{{$i->balance}}</td>
         <td>{{$i->status}}</td>
         <td>৳{{$i->total_purchased}}</td>
         <td>{{$i->created_at}}</td>
         <td>{{$i->updated_at}}</td>   
     </tr>
        @endforeach  
</table>
</center>

    <br>
    {{session('msg')}}

      </div>

    <!-- ======= Contact Section ======= -->
    
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact to Admin</h2>
          <p><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong> responses as soon as possible when when we are active. Feel free to discuss with us.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Dhaka, Bangladesh</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+8801869510882">+880 186 9510882</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:epay.management.21@gmail.com">EPay@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright  &copy; 2021 | <strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Powered by <a href="https://github.com/sourcecodebd/Laravel-Project"><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong> Team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/MainPage.js')}}"></script>

</body>

</html>