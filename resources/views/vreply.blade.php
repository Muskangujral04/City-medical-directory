@extends('layouts.app')
@extends('layouts.user')
@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="container">
	<form enctype="multipart/form-data" style="margin: auto;width: 50%" method="post" action="{{url('/user/vreply')}}">

    {{csrf_field()}}
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{$user->email}}" readonly>
          
          </div>
          <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control" name="subject" placeholder="Enter Subject" required>
          </div>

          <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" placeholder="Enter Message" name="message" rows="5"></textarea>
          </div>
           
           <input type="submit" name="submit" class="btn btn-primary form-control">
</div>
@endsection