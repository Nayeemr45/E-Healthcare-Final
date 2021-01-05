<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>E-Health Care</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
<script src="{{asset('asset/js/jquery-3.5.1.min.js')}}"></script>
  <!-- FancyBox -->
  
  <!-- Stylesheets -->
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/doctor.css')}}" rel="stylesheet">
  
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
                        <a href="/home">
                              <img src="{{asset('asset/img/logo.png')}}" alt="" width="130">
                        </a>
                  </figure>
            </div>

            <form>
              <div class="col-xl-3 col-lg-7 search">
                <input class="form-control" name="search" type="text" placeholder="Search Doctor" id="search" type="text">
                <div class="link-btn">
                    <button id="ajaxSearch" type="submit" class="btn-style-one">Search</button>
                </div>
        </div>
            </form>
          
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
                  <a href="/consult">Consult</a>
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
                <a href="#">Service</a>
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


  <div class="d2" style="display: none; margin-top: 50px; margin-left: 50px; margin-bottom: 50px;">
    <div class="card" >
        <div id="image">

        </div>
        <div class="card-body">
          <p class="card-title"><strong>Name</strong> : <span id="doctor_name"></span></p>
          <p class="card-text"><strong>Qualification</strong> : <span id="doctor_qualification"></span></p>
          <p class="card-text"><strong>Email</strong> : <span id="doctor_email"></span></p>
          <p class="card-text"><strong>Fee</strong> : <span id="doctor_fee"></span></p>
          <p class="card-text"><strong>About</strong> : <span id="doctor_about"></span></p>
          
        </div>
       

      </div>
    </div>
  



<div class="ss"></div>






@foreach($doctor as $x => $val)

<!-- doctors -->
<div class="doctors">

    <div class="card" style="border:2px solid #48bdc5;padding: 5px 5px;">
        <div class="img">
            <img class="card-img" src="{{asset('asset/img/'.$x = $val->photo)}}" alt="Card image cap" style="width:200px;height:217px">
        </div>
        <div class="card-body">
          <p class="card-title"><strong>Name</strong> : {{$x = $val->name}}</p>
          <p class="card-text"><strong>Qualification</strong> : {{$x = $val->qualification}}</p>
          <p class="card-text"><strong>Email</strong> : {{$x = $val->email}}</p>
          <p class="card-text"><strong>Fee</strong> : {{$x = $val->fee}}</p>
          <p class="card-text"><strong>About</strong> : {{$x = $val->about}}</p>
          
        </div>
       

      </div>
</div><!-- end doctors -->
@endforeach









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


<script>
    function goBack() {
      window.history.back();
    }
    </script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#ajaxSearch").click((e) => {
            e.preventDefault();
            var search = $("#search").val();
            console.log("🚀 ~ file: index.blade.php ~ line 337 ~ $ ~ search", search)
              //$(this).closest('myTable').remove();
              $.ajax({
                url: "{{route('search.index')}}",
                data: { search: search },
                dataType: 'json',
                success: function(data){
                    console.log("$ -> results", data) 
                    /* var _html='';
                    $.each(res.data,function(index,data){

                    }); */
                    
                    document.querySelector('.doctors').style.display = "none";
                    document.querySelector('.d2').style.display = "flex";
                    

                    $.each(data, function(i, val) {
                     
                    $("#doctor_name").html(data[i].name);
                    $("#doctor_qualification").html(data[i].qualification);
                    $("#doctor_email").html(data[i].email);
                    $("#doctor_fee").html(data[i].fee);
                    $("#doctor_about").html(data[i].about);
                    $('#image').html('<img src="asset/img/'+data[i].photo+'" style="width:200px;height:217px"/>');

                  });
                }, error: function(err) {
                    alert(err);
                }
            });
           
            
            
        });
    });
</script>


</body>

</html>

