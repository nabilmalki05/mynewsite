<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 5 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Site1</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

<!-- Font -->
<link  rel="stylesheet" href="{{ asset('assets/https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900') }}">

<!-- css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

</head>

<body>
  
  <div class="wrapper">

<!--=================================
preloader -->
<div id="pre-loader">
  <img src="{{ asset('assets/images/pre-loader/loader-01.svg')}}" alt="">
</div>
<!--=================================
preloader -->

<!--=================================
login-->
<section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url({{ asset('assets/images/login-bg.jpg)')}};" >
  <div class="container">
    <div class="row justify-content-center g-0 vertical-align">
      <div class="col-lg-4 col-md-6 login-fancy-bg bg" style="background-image: url({{ asset('assets/images/login-inner-bg.jpg)')}};">
        <div class="login-fancy">
          <h2 class="text-white mb-20">Hello world!</h2>
          <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
          <ul class="list-unstyled  pos-bot pb-30">
            <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
            <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 bg-white">
        <div class="login-fancy pb-40 clearfix">
          <h3 class="mb-30">Sign In To Admin</h3>
          <div class="section-field mb-20">
            <label class="mb-10" for="name">User name* </label>
            <input id="name" class="web form-control" type="text" placeholder="User name" name="web">
          </div>
          <div class="section-field mb-20">
            <label class="mb-10" for="Password">Password* </label>
            <input id="Password" class="Password form-control" type="password" placeholder="Password" name="Password">
          </div>
          <div class="section-field">
            <div class="remember-checkbox mb-30">
              <input type="checkbox" class="form-control" name="two" id="two" />
              <label for="two"> Remember me</label>
              <a href="password-recovery.html" class="float-end">Forgot Password?</a>
            </div>
          </div>
          <a href="#" class="button">
            <span>Log in</span>
            <i class="fa fa-check"></i>
          </a>
          <p class="mt-20 mb-0">Don't have an account? <a href="register"> Create one here</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
login-->
</div>
 <!--=================================
  jquery -->

  <!-- jquery -->
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>

  <!-- plugins-jquery -->
  <script src="{{ asset('assets/js/plugins-jquery.js')}}"></script>

  <!-- plugin_path -->
  <script>var plugin_path = 'js/';</script>

  <!-- chart -->
  <script src="{{ asset('assets/js/chart-init.js')}}"></script>

  <!-- calendar -->
  <script src="{{ asset('assets/js/calendar.init.js')}}"></script>

  <!-- charts sparkline -->
  <script src="{{ asset('assets/js/sparkline.init.js')}}"></script>

  <!-- charts morris -->
  <script src="{{ asset('assets/js/morris.init.js')}}"></script>

  <!-- datepicker -->
  <script src="{{ asset('assets/js/datepicker.js')}}"></script>

  <!-- sweetalert2 -->
  <script src="{{ asset('assets/js/sweetalert2.js')}}"></script>

  <!-- toastr -->
  <script src="{{ asset('assets/js/toastr.js')}}"></script>

  <!-- validation -->
  <script src="{{ asset('assets/js/validation.js')}}"></script>

  <!-- lobilist -->
  <script src="{{ asset('assets/js/lobilist.js')}}"></script>

  <!-- custom -->
  <script src="{{ asset('assets/js/custom.js')}}"></script>

</body>
</html>
