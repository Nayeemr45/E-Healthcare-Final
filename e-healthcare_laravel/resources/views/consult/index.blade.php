<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>E-Health Care</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{asset('asset/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('asset/plugins/slick/slick-theme.css')}}">
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{asset('asset/plugins/fancybox/jquery.fancybox.min.css')}}">
  
  <!-- Stylesheets -->
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/consult.css')}}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.html">
                              <img src="{{asset('asset/img/logo.png')}}" alt="" width="130">
                        </a>
                  </figure>
            </div>
       
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="/home">Home</a>
            </li>
           
            <li>
                  <a href="/doctors">Doctors</a>
            </li>
            <li>
                  <a href="#">Consult</a>
            </li>
            <li>
                  <a href="/appointment">Appointment</a>
            </li>
            <li>
                  <a href="/blog">Blog</a>
            </li>
            <li>
                  <a href="/pharmacy">Pharmacy</a>
            </li>
            <li>
                  <a href="/diagnostic">Diagnostics</a>
            </li>           
            <li>
                <a href="#">About</a>
            </li>
         
            <li>
                  <a href="#">Contact</a>
            </li>
      
                   
              </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->



<!-- doctors -->
<div class="doctors">
    <div class="card" >
    @if(session('msg2'))
              <div class="alert alert-success">
              {{session('msg2')}}
              </div>
           @endif
        <form method="POST">
            @csrf
            <div class="card-body">
              <h2 class="card-title">Please Fill the Form</h2><br>
              <label>Choose a Department :</label>
              <div class="form-group">
              <select class="form-control" name="department" style="padding: 0px;">
                <option disabled value="Choose a Department">Choose a Department</option>
                <option value="General Physician">General Physician</option>
                <option value="Psychiatry">Psychiatry</option>
                <option value="Kidney and urine">Kidney and urine</option>
              </select><br><br>
                </div>
              <label>Choose a Doctor :</label>
              <select name="doctor" class="form-control" style="padding: 0px;">
              <option disabled value="Choose a Doctor">Choose a Doctor</option>
              @foreach($user as $x => $val)
                <option value="{{$x = $val->id}}">{{$x = $val->name}}</option>
              @endforeach
            </select><br><br>
              <label>Enter Consulting Date :</label>
              <input type="date" name="date" class="form-control"><br><br>
              <label>Enter Consulting Time :</label>
              <input type="time" name="time" class="form-control">
              <input type="hidden" name="fee" ><br><br>
              <p class="card-text">Consulting fee : 500 BDT</p>
              <input type="hidden" name="user_id" value="{{$id}}">
              
              <button type="submit" name="submit" class="btn btn-primary">Request Consulting</button>
            </div>
        </form>
      </div>
    
</div><!-- end -->











<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="{{asset('asset/img/logo-2.png')}}" alt="">
                </a>
              </figure>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Modamba, NY 80021, United States</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>Support@medic.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>(88017) +123 4567</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Services</h6>
          <ul class="menu-link">
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="social-links">
            <h6>Recent Posts</h6>
            <ul>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="{{asset('asset/img/blog/post-thumb-small.jpg')}}" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Post Title</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="{{asset('asset/img/blog/post-thumb-small.jpg')}}" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="#">Post Title</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2018. All Rights Reserved by
          <a href="index.html">Medic</a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="{{asset('asset/plugins/jquery.js')}}"></script>
<script src="{{asset('asset/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/plugins/bootstrap-select.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('asset/plugins/slick/slick.min.js')}}"></script>
<!-- FancyBox -->
<script src="{{asset('asset/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
<!-- Google Map -->

<script src="{{asset('asset/plugins/validate.js')}}"></script>
<script src="{{asset('asset/plugins/wow.js')}}"></script>
<script src="{{asset('asset/plugins/jquery-ui.js')}}"></script>
<script src="{{asset('asset/plugins/timePicker.js')}}"></script>
<script src="{{asset('asset/js/script.js')}}"></script>


<script>
    function goBack() {
      window.history.back();
    }
    </script>
</body>

</html>

