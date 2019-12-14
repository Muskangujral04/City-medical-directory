@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <title>City Medical Directory</title>
    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="{{asset('/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/css/owl.theme.green.min.css')}}">
  <script type="text/javascript" src="{{asset('/js/owl.carousel.min.js')}}"></script>

</head>

<body>

    <!-- Doc info -->
    <section id="docInfo" class="cl-padding pt-2 bg-light-3">
        <div class="container">
            <div class="row text-left ">
                <!-- left-sidebar -->
                <div class="col-sm-3">
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{asset('/image/'.$user->logo)}}" alt="Card image cap">
                        <div class="card-body ">
                            <h5 class="card-title font-weight-bold font-secondary cld-font-size-18 mb-0">Contact Info</h5>
                        </div>
                        <div class="sidebar-content">
                            <ul class="list-group list-group-flush ">
                                <li class="list-group-item cld-font-size-13">
                                    <strong class="d-block text-uppercase">Location</strong>
                                    <a class="cld-text-gray-light1 text-deco-none" href="https://goo.gl/maps/nkp693jRDAob7PADA" target="_blank">{{$user->address1}},{{$user->city->city_name}}</a>
                                </li>
                                <li class="list-group-item cld-font-size-13">
                                    <strong class="d-block text-uppercase">Phone</strong>
                                    <a class="cld-text-gray-light1 text-deco-none" href="tel:123-456-789">{{$user->landline}}</a>
                                </li>

                                <li class="list-group-item cld-font-size-13">
                                    <strong class="d-block text-uppercase">Phone</strong>
                                    <a class="cld-text-gray-light1 text-deco-none" href="tel:123-456-789">{{$user->mobile}}</a>
                                </li>
                                
                                <li class="list-group-item cld-font-size-13">
                                    <strong class="d-block text-uppercase">Email</strong>
                                    <a class="cld-text-gray-light1 text-deco-none">{{$user->email}}</a>
                                </li>
                                <li class="list-group-item cld-font-size-13">
                                    <strong class="d-block text-uppercase">Web Site</strong>
                                    <a class="cld-text-gray-light1 text-deco-none" href="https://www.dmch.edu/" target="_blank">{{$user->website}}</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title font-weight-bold font-secondary cld-font-size-18 mt-1 mb-0">Working Time</h5>
                        </div>
                        <div class="sidebar-content list-bottom-border-light">
                            <ul class="list-group list-group-flush ">
                                <li class="list-group-item cld-font-size-13">
                                    <strong class="d-block text-uppercase">Summer</strong>
                                    <span class="cld-text-gray-light1 text-deco-none">{{$user->s_timing1}}</span> -
                                    <span class="cld-text-gray-light1 text-deco-none">{{$user->s_timing2}}</span>
                                </li>
                                <li class="list-group-item cld-font-size-13 ">
                                    <strong class="d-block text-uppercase">Winter</strong>
                                    <span class="cld-text-gray-light1 text-deco-none">{{$user->w_timing1}}</span> -
                                    <span class="cld-text-gray-light1 text-deco-none">{{$user->w_timing2}}</span>
                                </li>
                            </ul>
                        </div>
                       
                        
                        <div class="card-body pt-4 pb-2">
                            <h5 class="card-title font-weight-bold font-secondary cld-font-size-18 mt-2 mb-0">Contact Me</h5>
                        </div>
                        <div class="sidebar-content pr-3 pl-3">
                            <form method="post" action="{{url('/query')}}">
                                 {{csrf_field()}}
   
                                
                                <div class="form-group mb-4">
                                    <input type="text" class="form-control box-shadow-none border-focus-dark border-width-3" id="inputSubject" placeholder="Enter Name" name="name">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="email" class="form-control box-shadow-none border-focus-dark border-width-3" id="inputEmail" placeholder="Email" name="email">
                                    <input type="hidden" name="vid" value="{{$user->user_id}}">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" class="form-control box-shadow-none border-focus-dark border-width-3" id="inputSubject" placeholder="Enter Subject" name="subject">
                                </div>

                                <div class="form-group mb-4">
                                    <textarea class="form-control box-shadow-none border-focus-dark border-width-3" rows="5" id="inputMessage" placeholder="Enter Message" name="message"></textarea>
                                </div>
                                <input type="hidden" name="vemail" value="{{$user->email}}">
                                <div class="form-group mb-5">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg p-3 cld-font-size-14 font-secondary">SEND MESSAGE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="card pb-3">
                        <div class="card-body pb-2">
                            <h5 class="card-title font-weight-bold font-secondary cld-font-size-18 mt-2 mb-1">Claim the Listing</h5>
                        </div>
                        <div class="sidebar-content pr-3 pl-3">
                            <form>
                                <div class="form-group mb-4">
                                    <input type="text" class="form-control box-shadow-none border-focus-dark border-width-3" id="inputSubject1" placeholder="Enter Subject">
                                </div>
                                <div class="form-group mb-4">
                                    <textarea class="form-control box-shadow-none border-focus-dark border-width-3" rows="5" id="inputMessage1" placeholder="Enter Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg p-3 cld-font-size-14 font-secondary">SUBMIT CLAIM</button>
                                </div>
                            </form>
                        </div>
                    </div> -->
                </div>
                <!-- content right-side -->
                <div class="col-sm-9">
                    <div class="card mb-4">
                        <h5 class="card-header font-weight-bold font-secondary bg-white pt-4 pb-4 cld-font-size-18">Profile Description</h5>
                        <div class="card-body p-4 mb-3">
                            <p class="card-text cld-font-size-13 cld-line-height">{{$user->about_us}}</p>
                        </div>
                    </div>
                    
                    <div class="card mb-4">
                        <h5 class="card-header font-weight-bold font-secondary bg-white pt-4 pb-4 cld-font-size-18">Specialties</h5>
                        <div class="card-body p-4 mb-3">
                        
                            <ul class="doc-specialities list-unstyled">
                                
                                @foreach($specialities as $special)
                                @foreach($others as $other)
                                @if($special->id==$other)
                                <li>{{$special->speciality_name}}</li>
                                @endif
                                @endforeach
                                @endforeach
                                
                            </ul>
                        </div>
                    </div><div class="owl-carousel owl-theme">
                        
                        @foreach($gallery as $img)
                        <div class="item">
                        <img style="height: 200px" src="{{asset('/image/'.$img)}}" >
                        </div>
                        @endforeach
                        
                    </div>

                    

                    <!-- <div class="card mb-4">
                        <h5 class="card-header font-weight-bold font-secondary bg-white pt-4 pb-4 cld-font-size-18">Location</h5>
                        <div class="card-body p-4 mb-3">
                            <p class="card-text cld-font-size-13 cld-line-height"></p>
                        </div>
                    </div> -->
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Doc info end-->
    
    <!-- Scripts -->
    
        <script type="text/javascript">
        $(document).ready(function(){
         $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:1500,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

        });
    </script>
</body>
@endsection
</html>