
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Health Care</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/style2.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/pharmacy.css')}}" type="text/css">

     <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('asset/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('asset/plugins/slick/slick-theme.css')}}">
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{asset('asset/plugins/fancybox/jquery.fancybox.min.css')}}">
  
  <!-- Stylesheets -->
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">

</head>

<body>
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
                <ul class=" navbar-nav">
                      <li class="active">
                            <a href="/home">Home</a>
                      </li>
                     
                      <li>
                            <a href="/doctors">Doctors</a>
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

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{asset('asset/img/logo.png')}}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('asset/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <form>
                  <div class="col-xl-3 col-lg-7 search">
                    <input class="form-control" type="text" placeholder="Search Doctor" id="search" type="text">
                    <div class="link-btn">
                        <button id="ajaxSearch" type="submit" class="btn-style-one">Search</button>
                    </div>
            </div>
                </form>
                <div class="col-lg-3">
                    <div class="header__right">
                       
                        <ul class="header__right__widget">
                            
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

   

  <section class="show" style="display: none;">
    <div class="container" >      
        <div class="row property__gallery px-3">

                <div class="col-md-3 mt-3 product__item" style="display: none;">
                    <div id="image" style="margin-top: 20px;"></div><br>
                    <div class="product__item__text" style="margin-top: 195px;">
                        <h2><span id="name"></span></h2>
						<h2>৳ <span id="price"></span> Taka</h2>
					</div>
                </div>
        </div>
    </div>
  </section>
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row property__gallery px-3 dshow">
        @foreach($medicine as $x => $val)

                <div class="col-md-3 mt-3 product__item" >
                    <div class="product__item__pic set-bg" data-setbg="{{asset('asset/img/'.$x = $val->image)}}">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="{{asset('asset/img/'.$x = $val->image)}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{$x = $val->name}}</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
						<div class="product__price">৳ {{$x = $val->price}} TAKA</div>
					</div>
                </div>
                @endforeach

                 
            
        </div>
    </div>
</section>
<!-- Product Section End -->



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
<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->
<script src="{{asset('asset/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('asset/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('asset/js/mixitup.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('asset/js/main.js')}}"></script>
<script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
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
            console.log("🚀 ~ file: index.blade.php ~ line 394 ~ $ ~ search", search)
            //$(this).closest('myTable').remove();
            $.ajax({
                url: "{{route('search.pharmacy')}}",
                data: { search: search },
                dataType: 'json',
                success: function(data){
                   
                    console.log("$ -> results", data)
                    document.querySelector('.dshow').style.display = "none";
                    document.querySelector('.product__item').style.display = "flex";
                    document.querySelector('.show').style.display = "flex";
                    $("#name").html(data[0].name);
                    $("#price").html(data[0].price);
                    $('#image').html('<img src="asset/img/'+data[0].image+'"style="width:200px;height:217px" />');
                }, error: function(err) {
                    alert(err);
                }
            });
            
            
        });
    });
</script>
</body>

</html>