<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>E-Pay | Customer-Add</title>

    <!-- Icons font CSS-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/Registration.css')}}" rel="stylesheet" media="all">
	<link href="{{asset('css/login1.css')}}" rel="stylesheet" media="all">
    <div>
	<h1><strong><span style="font-size:40px; font-family: Sans-Serif; color:darkblue">E</span><span style="font-size:40px; font-family: Sans-Serif; color:rgb(81, 219, 187)">Pay</span></strong></h1>
    </div>
</head>

<body>

<iframe src="{{asset('music/RunicPower.mp3')}}" allow="autoplay" style="display: none"></iframe>
<audio id="player" autoplay loop>
    <source src="{{asset('music/RunicPower.mp3')}}" type="audio/mp3">
</audio>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
				<span class="login100-form-title">
						Customer Add & Registration
					</span>

                    <form method="POST" enctype="multipart/form-data">
					@csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username" value="{{old('username')}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" value="{{old('password')}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="dob" value="{{old('dob')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="email" value="{{old('email')}}">
                                </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Father/Spouse Name</label>
                                    <input class="input--style-4" type="text" name="father" value="{{old('father')}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mother Name</label>
                                    <input class="input--style-4" type="text" name="mother" value="{{old('mother')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address</label>
                                    <input class="input--style-4" type="text" name="addr" value="{{old('addr')}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" value="{{old('phone')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Others
                                            <input type="radio" name="gender" value="Others">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            <div class="input-group">
                            <label class="label">Blood Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="blood">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">User Type</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="type">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="Customer">Customer</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NID Number</label>
                                    <input class="input--style-4" type="text" name="nid" value="{{old('nid')}}">
                                </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Upload Image</label>
                                    <input class="input--style-4" type="file" name="myfile">
                                </div>
                            </div>
					<!-- Login1.css -->	
					<div style="width:50%" class="container-login100-form-btn">
						<button class="login100-form-btn">
							Add
						</button>
					</div>

                    <div class="text-center p-t-136">
						<a class="txt2" style="text-decoration:none" href="{{route('admin.userlist')}}">
							Done
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
                    </form>

                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/Registration.js')}}"></script>
    <script src="{{asset('js/login.js')}}"></script>
	

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->