<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Pay | Admin-Home</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:+880 1775463783">+880 186 510882</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/Emon71340800" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/Emon.king16/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/dauntless_Emon/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/Emon-mahmud-350141185/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="{{route('admin.admin')}}">E<span>Pay</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
 
        <input style = "color: blue" type="text" class="searchInput" name="search" id="search" placeholder="Search..">
            <div id='submitsearch'
              style="">
              
            </div>
        <script>
        $(document).ready(function(){
        fetch_all_data();
        function fetch_all_data(query = '')
        {
          $.ajax({
          url:"{{ route('csearch') }}",
          method:'GET',
          data:{query:query},
          dataType:'json',
          success:function(data)
          {
            $('tbody').html(data.table_data);
            $('#total_records').text(data.total_data);
          }
          })
        }
        $(document).on('keyup', '#search', function(){
          var query = $(this).val();
          fetch_all_data(query);
        });
        });
        </script>

        <li><a class="nav-link scrollto" href="{{route('admin.create')}}">Add Customer</a></li>
        <li><a class="nav-link scrollto" href="{{route('logoutnm')}}">Logout</a></li>
          <li class="dropdown"><a href="#"><span>{{ session('username') }}</span> <i class="bi bi-chevron-down"></i></a>
          
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="container box">
        
            <table class="table table-striped table-bordered" style="width:100">
            <tbody>

            </tbody>
            </table>

      </div>


  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2>Welcome Home!<br><span style="color: red; text-decoration:none">{{session('username')}}</span></h2>
      <div>
      <a href="{{route('admin.userlist')}}" class="btn-get-started scrollto">Admin and other's Profile</a>
      <a href="{{route('admin.messagelist')}}" class="btn-get-started scrollto">Message</a>
      <a href="{{route('creviewlist')}}" class="btn-get-started scrollto">All Reviews</a>
      <a href="{{route('download')}}" class="btn-get-started scrollto">Download All Customer List</a>
      <a href="{{route('downloadbalance')}}" class="btn-get-started scrollto">Download All Customer Transition</a>
      
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
     <!--   <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Other</h2>
        </div>

    <section id="contact">
      <div class="container">
 
               <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
						Other Forms will be here
					</span>

        <form method="POST" enctype="multipart/form-data">
					@csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date&nbsp;&nbsp;</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="dor" value="{{old('reviewdate')}}">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Other&nbsp;&nbsp;</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Satisfactory
                                            <input type="radio" checked="checked" name="review" value="Satisfactory">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">It's Okay
                                            <input type="radio" name="review" value="It's Okay">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Not Satisfactory
                                            <input type="radio" name="review" value="Not Satisfactory">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Other</label>
                                    <input class="input--style-4" type="text" rows="5" name="feedback" value="{{old('feedback')}}">
                                </div>
                            </div> -->
                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label">CGPA</label>
                                    <input class="input--style-4" type="text" name="cgpa" value="{{old('cgpa')}}">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Type&nbsp;&nbsp;</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="type">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div> 
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Upload Image</label>
                                    <input class="input--style-4" type="file" name="myfile">
                                </div>
                            </div>-->
                        
						<!-- <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Register</button>
                        </div> -->

					<!-- Login1.css -->	
          
					<!-- <div style="width:50%" class="container-login100-form-btn">
						
            <button class="login100-form-btn" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
				Other
			</button> -->
					</div>
          </form>
          @foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</div>
</div>


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
              <p><a href="tel:+8801775463783">+880 1775463783</a></p>
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