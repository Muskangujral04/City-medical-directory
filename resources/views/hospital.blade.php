@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>City Medical Directory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		@foreach($users as $user)
		 <div class="col-md-3 col mb-4 cld-card-wrap">
                         
                                <div class="card border-0">
                                    <div class="" style="height: !important 200px">
                                        <img class="card-img" style="height: 250px" width="auto" src="{{asset('/image/'.$user->logo)}}" alt="Caption">
                                    </div>

                
                                    <div style="height: 160px" class="card-body pb-1 pt-3">
                                        <p class="font-secondary card-title mt-0 mb-0 font-weight-normal">{{$user->company_name}}</p>
                                      
                                        <p class="p-0 cld-text-color small text-uppercase mb-1">{{$user->address1}},{{$user->city->city_name}}</p>
                                        
                                        <a href="{{url('/profile/'.$user->id)}}"> <button style="margin-top: 10px" class=" font-weight-bold py-2 px-4  rounded-corner-btn btn btn-primary">VIEW DETAILS</button></a>
                                      
                                    </div>
                                </div>
                         
                        </div>
                        @endforeach
		
	</div>

  
	
</div>
</body>
</html>
@endsection