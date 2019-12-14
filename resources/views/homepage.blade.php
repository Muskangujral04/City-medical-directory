@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <title>City Medical Directory</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <!-- searchbar -->
    
    <!-- navbar end -->
    <!-- banner -->
    <div style="margin-top: -20px" class="container-fluid text-center" id="bannerWrap">
<div class="row carousel-wrap">
            <div style="width: 100%" id="carouselIndicatorsBanner" class="carousel slide main-carousel" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="image/banner.png" alt="Second slide">
                        <div class="banner-content"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <div class="banner-icon text-center mx-auto cld-text-color">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <h1 class="display-4 font-weight-normal pt-3 font-secondary">Welcome to City Medical Directory</h1>
                            <small>SEARCH FOR HOSPITALS AND DOCTORS ON WORLD WIDE BASIS</small>
                            <div class="banner-btn-wrap p-4">
                                <button class="btn btn-sm mr-2 rounded-corner-btn btn-primary" onclick="window.location.href='{{url('/hospital')}}'">FIND A HOSPITAL</button>
                                <button class="btn btn-sm ml-2 rounded-corner-btn btn-transparent btn-outline-default" onclick="window.location.href='{{url('/doctor')}}'">FIND A DOCTOR</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/banner.png" alt="Second slide">
                        <div class="banner-content"></div>
                        <div class="carousel-caption d-none d-md-block">
                             <div class="banner-icon text-center mx-auto cld-text-color">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <h1 class="display-4 font-weight-normal pt-3 font-secondary">Welcome to City Medical Directory</h1>
                            <small>SEARCH FOR HOSPITALS AND DOCTORS ON WORLD WIDE BASIS</small>
                            <div class="banner-btn-wrap p-4">
                                <button class="btn btn-sm mr-2 rounded-corner-btn btn-primary" onclick="window.location.href='{{url('/hospital')}}'">FIND A HOSPITAL</button>
                                <button class="btn btn-sm ml-2 rounded-corner-btn btn-transparent btn-outline-default" onclick="window.location.href='{{url('/doctor')}}'">FIND A DOCTOR</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/banner.png" alt="Second slide">
                        <div class="banner-content"></div>
                        <div class="carousel-caption d-none d-md-block">
                             <div class="banner-icon text-center mx-auto cld-text-color">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <h1 class="display-4 font-weight-normal pt-3 font-secondary">Welcome to City Medical Directory</h1>
                            <small>SEARCH FOR HOSPITALS AND DOCTORS ON WORLD WIDE BASIS</small>
                            <div class="banner-btn-wrap p-4">
                                <button class="btn btn-sm mr-2 rounded-corner-btn btn-primary" onclick="window.location.href='{{url('/hospital')}}'">FIND A HOSPITAL</button>
                                <button class="btn btn-sm ml-2 rounded-corner-btn btn-transparent btn-outline-default" onclick="window.location.href='{{url('/doctor')}}'">FIND A DOCTOR</button>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselIndicatorsBanner" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicatorsBanner" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>       
                
        <div class="row" style="background-color: black">
             
            <div class="search-form">
                <form class="form-inline d-flex align-items-center justify-content-center" method="post" action="{{url('/filter')}}">
                    {{csrf_field()}}
                   
                    <div class="form-group col-md-3 col-12 pl-md-0 col-sm-6 mb-sm-3 pr-md-3 pr-sm-0  mb-md-0 ">
                        <select name="category" class="form-control">
                            <option selected value>Select Category</option>
                          @foreach($categories as $c)
                          <option value="{{$c->id}}">{{$c->category_name}}</option>
                          @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3 col-12 pl-md-0 col-sm-6 mb-sm-3  mb-md-0 ">
                        <select name="speciality" class="form-control">

                            <option selected value>Select Speciality</option>
                            @foreach($specials as $s)
                            <option value="{{$s->id}}">{{$s->speciality_name}}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary mr-0">
                </form>
            </div>
        </div>
        <!-- responsive -->
        <div class="row  main-banner">
            <img src="{{asset('image/banner.png')}}" alt="banner" class="img-fluid cld-main-image">
            
            <div class="col-12 banner-content">
                <div style="margin-top: -25px" class="banner-icon text-center mx-auto cld-text-color">
                    <i class="fa fa-user-md"></i>
                </div>
                <h1 style="margin-top: -30px" class="display-4 font-weight-normal pt-3">Welcome to City Medical Directory</h1>
                <!-- <small>SEARCH FOR HOSPITALS AND DOCTORS ON WORLD WIDE BASIS</small> -->
            </div>
            <div class="search-form" style="width: 100%">
                <form class="form-inline d-flex align-items-center justify-content-center" method="post" action="{{url('/filter')}}">
                    @csrf
                    <div class="form-group col-md-2 col-12 pl-md-0 col-sm-6 mb-sm-3 pr-md-3 pr-sm-0  mb-md-0 ">
                      <select name="category" class="form-control">
                            <option selected value>Select Category</option>
                          @foreach($categories as $c)
                          <option value="{{$c->id}}">{{$c->category_name}}</option>
                          @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-2 col-12 pl-md-0 col-sm-6 mb-sm-3  mb-md-0 ">
                        <select name="speciality" class="form-control">

                            <option selected value>Select Speciality</option>
                            @foreach($specials as $s)
                            <option value="{{$s->id}}">{{$s->speciality_name}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <input type="submit" name="submit" value="search" class="btn btn-primary mr-0">
                </form>
            </div>
        </div>
    </div>
    <!-- banner end-->
    <!-- Banner-sub -->
    <div id="banner-sub">
        <div class="container-fluid">
            <div class="row text-center ">
                <div class="col-md-4 cl-padding pr-md-5 pl-md-5 pb-3 first pr-3 pl-3">
                    <div class="banner-icon p-2 text-center mx-auto cld-text-color cld-banner-sub-icons">
                        <i class="fa fa-hospital-o"></i>
                    </div>
                    <h5 class="cld-headings pt-4 pb-3 font-weight-bold">Hospital</h5>
                    <p>With Over 300 hospitals across 20 countries medical directory is the right place to find your closest healthcare center</p>
                    <a class="btn btn-lg btn-outline-primary cld-font-size-14" href="{{url('/hospital')}}">SEARCH NOW</a>
                </div>
                <div class="col-md-4 cl-padding pr-md-5 pl-md-5  border border-top-0 border-bottom-0 second pr-3 pl-3">
                    <div class="banner-icon p-2 text-center mx-auto cld-text-color cld-banner-sub-icons">
                        <i class="fa fa-user-md"></i>
                    </div>
                    <h5 class="cld-headings pt-4 pb-3 font-weight-bold">Doctor</h5>
                    <p>Find the right doctor within the closest hospital across a wide range of medical fields including neurosurgery</p>
                    <a class="btn btn-lg btn-outline-primary cld-font-size-14" href="{{url('/doctor')}}">SEARCH NOW</a>
                </div>
                <div class="col-md-4 cl-padding pr-md-5 pl-md-5 pr-3 pl-3">
                    <div class="banner-icon p-2  text-center mx-auto cld-text-color cld-banner-sub-icons">
                        <i class="fa fa-flask"></i>
                    </div>
                    <h5 class="cld-headings pt-4 pb-3 font-weight-bold">Laboratory</h5>
                    <p>You're a medical center with hospitals and doctors worldwide, medical directory is the right place to list your hospitals and doctors, join us now</p>
                    <a class="btn btn-lg btn-outline-primary cld-font-size-14" href="#">SEARCH NOW</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner-sub end-->
    <!-- hosp category -->
    <div id="hospCat" class="cl-padding bg-white">
        <div class="container">
            <h2 class="cld-headings">Hospital Categories</h2>
            <p class="cld-sub-heading mb-md-5 mb-3">With over 5000 doctors and experts in the healthcare field medical directory provides a listing of all doctors across a wide variety if medical fields.</p>
            <div class="row">
                <div class="col-md-3 col-6 mb-4 cld-card-wrap">
                    <a href="#" class="main-link">
                        <div class="card" style="height: 90%">
                            <div class="card-wrap d-flex justify-content-center align-items-center">
                                <img class="card-img-top" src="{{asset('image/heart.jpeg')}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                                <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title m-0">Cardiology</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-6 mb-4 cld-card-wrap">
                    <a href="#" class="main-link">
                        <div class="card" style="height: 90%">
                            <div class="card-wrap d-flex justify-content-center align-items-center">
                                <img class="card-img-top" src="{{asset('image/doc.jpg')}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                                <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title m-0">Neurology</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-6 mb-4 cld-card-wrap">
                    <a href="#" class="main-link">
                        <div class="card" style="height: 90%">
                            <div class="card-wrap d-flex justify-content-center align-items-center">
                                <img class="card-img-top" src="{{asset('image/gastro.jpg')}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                                <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title m-0">Gastroenterologists</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3  col-6 mb-4 cld-card-wrap">
                    <a href="#" class="main-link">
                        <div class="card" style="height: 90%">
                            <div class="card-wrap d-flex justify-content-center align-items-center">
                                <img class="card-img-top" src="{{asset('image/dentist.jpeg')}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                                <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title m-0">Dentist</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- hosp category end-->
    <!-- doc category-->
    <div id="docCat" class="cl-padding">
        <div class="container">
            <h2 class="cld-headings">Doctor Categories</h2>
            <p class="cld-sub-heading mb-md-5 mb-3">With over 5000 doctors and experts in the healthcare field medical directory provides a listing of all doctors across a wide variety if medical fields.</p>
            <div class="row">
                <div class="col-md-3 col-6 mb-4 cld-card-wrap">
                    <a href="{{url('/doctor/'.'3')}}" class="main-link">
                        <div class="card" style="height: 100%">
                            <div class="card-wrap d-flex justify-content-center align-items-center">
                                <img class="card-img-top" src="{{asset('image/oncologist.jpeg')}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                                <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title m-0">Oncologist</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-6 mb-4 cld-card-wrap">
                    <a href="{{url('/doctor/'.'2')}}" class="main-link">
                        <div class="card" style="height: 100%">
                            <div class="card-wrap d-flex justify-content-center align-items-center">
                                <img class="card-img-top" src="{{asset('image/cardiologist.jpeg')}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                                <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div  class="card-body">
                                <h6 class="card-title m-0">Cardiologist</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-6 mb-4 cld-card-wrap">
                    <a href="{{url('/doctor/'.'8')}}" class="main-link">
                        <div class="card" style="height: 90%">
                            <div class="card-wrap d-flex justify-content-center align-items-center">
                                <img class="card-img-top" src="{{asset('image/psychiatrist.jpg')}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                                <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title m-0">Psychiatrist</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3  col-6 mb-4 cld-card-wrap">
                    <a href="{{url('/doctor/'.'4')}}" class="main-link">
                        <div class="card" style="height: 90%">
                            <div class="card-wrap d-flex justify-content-center align-items-center">
                                <img class="card-img-top" src="{{asset('image/neurology.jpeg')}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                                <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title m-0">Neurologist</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- doc category end-->
    
    <!-- featureHosp -->
    <div id="featuredHosp" class="cl-padding">
        <div class="container">
            <h2 class="cld-headings">Featured Hospital</h2>
            <p class="cld-sub-heading mb-md-5 mb-3">With over 5000 doctors and experts in the healthcare field medical directory provides a listing of all doctors across a wide variety if medical fields.</p>
            <div class="row owl-carousel" id="mycarousel">
                  @foreach($users as $user)              
                 <div class="col-md-3 col-6 mb-4 cld-card-wrap item">
                    <div>
                   
                    <a href="#" class="main-link">
                        <div class="card border-0">
                            
                            <div>
                                <img id="myimg" height="250px" class="card-img-top" src="{{asset('/image/'.$user->logo)}}" alt="Caption" >
                                <!-- <div class="card-overlay">
                                </div> -->
                                <!-- <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div> -->
                            </div>
                           
                            <div style="height: 100%;" class="card-body pb-1 pt-3">
                                
                                <h6 class="card-title mt-2 mb-1">{{$user->company_name}}</h6>
                                <p class="p-0 cld-text-color">{{$user->speciality->speciality_name}}</p>
                            </div>

                        </div>
                    </a>
            
                </div>
            </div>
                @endforeach
                
                
               <!--  <div class="col-md-3 col-6 mb-4 cld-card-wrap item">
                    <a href="#" class="main-link">
                        <div class="card border-0">
                            <div class="card-wrap d-flex justify-content-center align-items-center">
                                <img class="card-img-top" src="{{asset('image/featured-hosp1.jpg')}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                                <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="card-body pb-1 pt-3">
                                <h6 class="card-title mt-2 mb-1 ">Dr. Steve Leon</h6>
                                <p class="p-0 cld-text-color">Cardiology</p>
                            </div>
                        </div>
                    </a>
                </div>-->
            </div>
        </div> 
    </div>
    <!-- featuredHosp end -->
    <!-- featuredDoctors  -->
    <div id="featuredDoc" class="cl-padding">
        <div class="container">
            <h2 class="cld-headings">Featured Doctor</h2>
            <p class="cld-sub-heading mb-md-5 mb-3">With over 5000 doctors and experts in the healthcare field medical directory provides a listing of all doctors across a wide variety if medical fields.</p>
             @foreach($peoples as $people)
            <div class="row owl-carousel">
                
                <div class="col-md-3 col-6 mb-4 cld-card-wrap">
                    <a href="#" class="main-link">
                        <div class="card border-0">
                            <div>
                                <img class="card-img-top" src="{{asset('image/'.$people->logo)}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                               
                            </div>
                            <div class="card-body pb-1 pt-3">
                                <h6 class="card-title mt-2 mb-1 ">{{$people->company_name}}</h6>
                                <p class="p-0 cld-text-color">{{$people->speciality->speciality_name}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
               <!--
                <div class="col-md-3 col-6 mb-4 cld-card-wrap">
                    <a href="#" class="main-link">
                        <div class="card border-0">
                            <div class="card-wrap d-flex justify-content-center align-items-center">
                                <img class="card-img-top" src="{{asset('image/feature-doctor3.jpg')}}" alt="Caption">
                                <div class="card-overlay">
                                </div>
                                <div class="banner-icon">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="card-body pb-1 pt-3">
                                <h6 class="card-title mt-2 mb-1 ">Dr. Steve Leon</h6>
                                <p class="p-0 cld-text-color">Cardiology</p>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- featuredDoctors end -->
    
    <!-- blogPosts end -->
    
    <!-- sales -->
    <!-- <div class="cld-popup" id="popupLoad">
        <div class="alert alert-faded alert-dismissible fade show p-2" role="alert">
            <button type="button" class="close d-flex justify-content-center" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div id="alert-heading">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('image/banner.png')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('image/feature-hosp-bg.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('image/feature-hosp-bg.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     --><!-- sales end-->
    <!-- Scripts -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/cld-scripts.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#mycarousel').owlCarousel({
               $('#myimg').attr("href","https://www.google.com");
            });
        });
    </script>
</body>

</html>

@endsection