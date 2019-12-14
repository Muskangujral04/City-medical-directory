<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>City Medical Directory</title>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  

  <!-- Custom fonts for this template-->
  
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="cld-searchbar cld-font-size-14">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-baseline justify-content-end">
                <!-- <div class="col-sm-4 col-4 text-left">
                    <i class="fa fa-search search-icon"></i>
                    <form class="form-inline upper-search">
                        <input type="text" class="form-control mr-sm-2 border-0" id="inlineFormInputName2" placeholder="Search Here">
                    </form>
                </div> -->
                <div style="margin-right: -30%" class="col-sm-3 offset-sm-5 col-8 text-right justify-content-end">
                    <ul  class="list-unstyled d-flex align-items-baseline justify-content-end m-0 search-bar-btns">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="{{url('user/home/')}}">
                                        Dashboard
                                       
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- searchbar end -->
    <!-- navbar -->
    <div class="cld-nav">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light" >
                    <a class="navbar-brand col-md-2 col-sm-4 col-5 pl-0" href="#">
                        <img src="{{asset('image/citymedicaldirectory.png')}}" alt="Logo" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cld-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="cld-navbar">
                        <ul class="navbar-nav mt-0 ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/hospital')}}">Hospital</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/doctor')}}">Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/listing')}}">Listing</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- footerlinks -->
    <div id="footerLinks" class="cl-padding">
        <div class="container">
            <div class="row text-left cld-font-size-14">
                <div class="col-md-3 mb-3 logo-info">
                    <img class="img-fluid" src="{{asset('image/citymedicaldirectory.png')}}" alt="logo">
                    <ul class="list-unstyled contact mt-3 pb-5">
                        <li><i class="float-left pr-3 fa fa-map-marker"></i>
                            <address>350 Fifth Avenue, 34th floor, New York, NY 10118-3299 USA</address>
                        </li>
                        <li><i class="float-left pr-3 fa fa-phone"></i>
                            <a href="tel:#">+91-968745623</a></li>
                        <li><i class="float-left pr-3 fa fa-envelope"></i>
                            <a href="mailto:">test@test.com</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h5 class="mb-4">FOLLOW US ON</h5>
                    <div  class="widget-parent d-flex justify-content-start align-content-center">
                        <div class="float-left widget-img mr-3">
                            <i class="fa fa-facebook-official" style="font-size: 200%" aria-hidden="true"></i>
                        </div>
                        <div class="widget-content float-left">
                            <h4 class="cld-font-size-14 font-weight-bold" style="font-size: 120%">FACEBOOK</h4>
                        </div>
                    </div>
                    <div class="widget-parent d-flex justify-content-start align-content-center">
                        <div class="float-left widget-img mr-3">
                            <i class="fa fa-twitter-square" style="font-size: 200%" aria-hidden="true"></i>
                        </div>
                        <div class="widget-content float-left">
                            <h6 class="cld-font-size-14 font-weight-bold" style="font-size: 120%">TWITTER</h6>
                        
                        </div>
                    </div>
                    <div class="widget-parent d-flex justify-content-start align-content-center">
                        <div class="float-left widget-img mr-3">
                            <i class="fa fa-instagram" style="font-size: 200%" aria-hidden="true"></i>
                        </div>
                        <div class="widget-content float-left">
                            <h6 class="cld-font-size-14 font-weight-bold" style="font-size: 120%">INSTAGRAM</h6>
                    
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <h5 class="mb-4">RECENTLY JOINED</h5>
                    <div class="widget-parent d-flex justify-content-start align-content-center">
                        <div class="float-left widget-img mr-3">
                            <img class="rounded  img-fluid" src="{{asset('image/post1.jpg')}}" alt="hosp name">
                        </div>
                        <div class="widget-content float-left">
                            <h6 class="cld-font-size-14 font-weight-bold">Dr. Daniel Raphels</h6>
                            <p class="cld-text-gray-light cld-font-size-14">December 24, 2015</p>
                        </div>
                    </div>
                    <div class="widget-parent d-flex justify-content-start align-content-center">
                        <div class="float-left widget-img mr-3">
                            <img class="rounded  img-fluid" src="{{asset('image/post1.jpg')}}" alt="hosp name">
                        </div>
                        <div class="widget-content float-left">
                            <h6 class="cld-font-size-14 font-weight-bold">Dr. Daniel Raphels</h6>
                            <p class="cld-text-gray-light cld-font-size-14">December 24, 2015</p>
                        </div>
                    </div>
                    <div class="widget-parent d-flex justify-content-start align-content-center">
                        <div class="float-left widget-img mr-3">
                            <img class="rounded  img-fluid" src="{{asset('image/post1.jpg')}}" alt="hosp name">
                        </div>
                        <div class="widget-content float-left">
                            <h6 class="cld-font-size-14 font-weight-bold">Dr. Daniel Raphels</h6>
                            <p class="cld-text-gray-light cld-font-size-14">December 24, 2015</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <h5 class="mb-4">NEWSLETTER</h5>
                    <p class="cld-text-gray-light cld-font-size-14">Subscribe to our newsletter to receive our latest news and updates. We do not spam.</p>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="abc@domain.com">
                        </div>
                        <button type="submit" class="btn  btn-primary cld-font-size-14 p-2 pl-4 pr-4">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footerlinks end-->
    <!-- footer -->
    <footer>
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 text-md-center text-sm-center small " style="text-align:center">
                    <a href="# "> Copyright &copy; 2019</a>&nbsp;&nbsp;&nbsp;City Medical Directory. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- footer end-->
</body>
</html>
